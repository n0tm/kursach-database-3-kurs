<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerAndFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE FUNCTION HASH_WITH_SALT(text CHAR(250))
            RETURNS CHAR(250)
            BEGIN
                DECLARE hash_with_salt CHAR(250);
                SET hash_with_salt=MD5(CONCAT(text, \'|\', "Some Salt"));
                RETURN hash_with_salt;
            END
        ');

        DB::unprepared('
        CREATE TRIGGER trigger_Hash_Bakeries BEFORE INSERT ON `bakeries` FOR EACH ROW
            BEGIN
                SET NEW.hash_index = HASH_WITH_SALT(NEW.address);
            END
        ');

        DB::unprepared('
        CREATE PROCEDURE GetAllOrdersWhereAmountMoreThan(amount INTEGER(11))
        BEGIN
            START TRANSACTION;
            SELECT
                CONCAT(clients.name, \' \', clients.surname) as client,
                bakeries.address as bakery_address,
                CONCAT(bakers.name, \' \', bakers.surname) as baker,
                buns.name as bun,
                couriers.name as courier,
                buns.amount as amount
            FROM orders
                LEFT JOIN clients ON clients.id = orders.client_id
                LEFT JOIN bakeries ON bakeries.id = orders.bakery_id
                LEFT JOIN bakers ON bakers.id = orders.baker_id
                LEFT JOIN couriers ON couriers.id = orders.courier_id
                LEFT JOIN buns ON buns.id = orders.bun_id
            WHERE buns.amount > amount;
            COMMIT;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER trigger_Hash_Bakeries');
        DB::unprepared('DROP FUNCTION HASH_WITH_SALT;');
        DB::unprepared('DROP PROCEDURE GetAllOrdersWhereAmountMoreThan;');
    }
}

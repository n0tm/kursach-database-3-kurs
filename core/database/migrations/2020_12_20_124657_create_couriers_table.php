<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('surname');
            $table->unsignedBigInteger('transport_id');
            $table->unsignedBigInteger('bakery_id');
            $table->timestamps();
        });

        Schema::table('couriers', function (Blueprint $table) {
            $table->foreign('transport_id')
                ->references('id')
                ->on('couriers_transport')
                ->onDelete('cascade');
            $table->foreign('bakery_id')
                ->references('id')
                ->on('bakeries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couriers');
    }
}

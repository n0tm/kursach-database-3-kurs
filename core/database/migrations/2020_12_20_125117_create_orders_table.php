<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->unsigned();
            $table->integer('baker_id')->unsigned();
            $table->integer('bun_id')->unsigned();
            $table->integer('bakery_id')->unsigned();
            $table->integer('courier_id')->unsigned();
            $table->timestamps();

//            $table->foreign('client_id')
//                ->references('id')
//                ->on('clients');
//            $table->foreign('baker_id')
//                ->references('id')
//                ->on('bakers');
//            $table->foreign('bakery_id')
//                ->references('id')
//                ->on('bakeries');
//            $table->foreign('courier_id')
//                ->references('id')
//                ->on('couriers');
//            $table->foreign('bun_id')
//                ->references('id')
//                ->on('buns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

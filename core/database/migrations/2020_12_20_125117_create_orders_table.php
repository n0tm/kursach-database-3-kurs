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
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('baker_id');
            $table->unsignedBigInteger('bun_id');
            $table->unsignedBigInteger('bakery_id');
            $table->unsignedBigInteger('courier_id');
            $table->timestamps();

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
            $table->foreign('baker_id')
                ->references('id')
                ->on('bakers')
                ->onDelete('cascade');
            $table->foreign('bakery_id')
                ->references('id')
                ->on('bakeries')
                ->onDelete('cascade');
            $table->foreign('courier_id')
                ->references('id')
                ->on('couriers')
                ->onDelete('cascade');
            $table->foreign('bun_id')
                ->references('id')
                ->on('buns')
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
        Schema::dropIfExists('orders');
    }
}

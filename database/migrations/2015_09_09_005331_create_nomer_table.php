<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomer', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('name', 255);
            $table->text('opis');
            $table->integer('k_mest');
            $table->integer('price');
            $table->integer('price_oll');//при брони польностью номера
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nomer');
    }
}

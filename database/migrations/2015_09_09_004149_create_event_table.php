<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');//событие id
            $table->boolean('bool');//предоплата
            $table->string('name');//имя события
            $table->date('start');//время заезда
            $table->date('end');//время выезда
            $table->integer('id_user');//пользователь
          //  $table->string('email')->unique();//почта
            $table->string('comment',200);//комментарий
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     * @return void
     */
    public function down()
    {
        Schema::drop('event');
    }
}

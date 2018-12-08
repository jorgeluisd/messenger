<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            //Usuario autenticado
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //Usuario contacto con el que se establecio la comunicacion
            $table->unsignedInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('users');
            //Ultimo mensaje con fecha/hora que se envió,
            //se hace asi para traer la data en una misma consulta y con FK
            $table->text('last_message');
            $table->dateTime('last_time');
            $table->boolean('listen_notifications')->default(true);
            $table->boolean('has_blocked')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}

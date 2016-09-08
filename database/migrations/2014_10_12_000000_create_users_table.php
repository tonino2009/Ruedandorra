<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('contrasena');
            $table->string('cargo');
            $table->string('activo');
            $table->string('avatar');
            $table->string('cochemarca');
            $table->string('cochemodelo');
            $table->integer('CT');
            $table->integer('VT');
            $table->integer('ratio');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

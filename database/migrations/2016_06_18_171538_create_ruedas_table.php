<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruedas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semana');
            $table->string('comentarios');
            $table->string('L1', 512);
            $table->string('L2', 512);
            $table->string('L3', 512);
            $table->string('L4', 512);
            $table->string('L5', 512);
            $table->string('L6', 512);
            $table->string('M1', 512);
            $table->string('M2', 512);
            $table->string('M3', 512);
            $table->string('M4', 512);
            $table->string('M5', 512);
            $table->string('M6', 512);
            $table->string('X1', 512);
            $table->string('X2', 512);
            $table->string('X3', 512);
            $table->string('X4', 512);
            $table->string('X5', 512);
            $table->string('X6', 512);
            $table->string('J1', 512);
            $table->string('J2', 512);
            $table->string('J3', 512);
            $table->string('J4', 512);
            $table->string('J5', 512);
            $table->string('J6', 512);
            $table->string('V1', 512);
            $table->string('V2', 512);
            $table->string('V3', 512);
            $table->string('V4', 512);
            $table->string('V5', 512);
            $table->string('V6', 512);
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
        Schema::drop('ruedas');
    }
}

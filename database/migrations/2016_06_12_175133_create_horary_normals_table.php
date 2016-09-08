<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraryNormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horary_normals', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->integer('LE');
            $table->integer('LS');
            $table->integer('LC');
            $table->integer('ME');
            $table->integer('MS');
            $table->integer('MC');
            $table->integer('XE');
            $table->integer('XS');
            $table->integer('XC');
            $table->integer('JE');
            $table->integer('JS');
            $table->integer('JC');
            $table->integer('VE');
            $table->integer('VS');
            $table->integer('VC');
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
        Schema::drop('horary_normals');
    }
}

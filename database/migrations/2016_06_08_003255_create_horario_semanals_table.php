<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioSemanalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_semanals', function (Blueprint $table) {
            $table->string('id');
            $table->string('LE');
            $table->string('LS');
            $table->string('LC');
            $table->string('ME');
            $table->string('MS');
            $table->string('MC');
            $table->string('XE');
            $table->string('XS');
            $table->string('XC');
            $table->string('JE');
            $table->string('JS');
            $table->string('JC');
            $table->string('VE');
            $table->string('VS');
            $table->string('VC');
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
        Schema::drop('horario_semanals');
    }
}

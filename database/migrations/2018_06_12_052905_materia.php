<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nombre');//Nombre de las Materias
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
            $table->timestamps();//Fecha de creacion || Fecha de Modificacion 
        });

    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('materias');
    }
}

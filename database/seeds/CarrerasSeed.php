<?php

use Illuminate\Database\Seeder;

class CarrerasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                /*AGREGAR CARRERAS*/

        DB::table('carreras')->insert(['carrera' => 'INGENIERÍA INDUSTRIAL','id' => 1]);
        DB::table('carreras')->insert(['carrera' => 'INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN','id' => 2]);
        DB::table('carreras')->insert(['carrera' => 'INGENIERÍA EN ENERGÍA','id' => 3]);
        DB::table('carreras')->insert(['carrera' => 'INGENIERÍA EN ELECTRÓNICA Y TELECOMUNICACIONES','id' => 4]);
        
    }
}

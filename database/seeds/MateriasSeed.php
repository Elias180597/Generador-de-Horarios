<?php

use Illuminate\Database\Seeder;

class MateriasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*AGREGAR CARRERAS*/

        DB::table('carrera')->insert([
            'nombre' => '',
            'id_carrera' => ''
        ]);


        /*AGREGAR MATERIAS */
        DB::table('materias')->insert([
            'nombre' => '',
            'id_carrera' => ''
        ]);
        
    }
}

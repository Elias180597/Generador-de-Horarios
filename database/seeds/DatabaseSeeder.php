<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'name' => 'Barb E. Dahl',
    		'email' => 'admin@example.com',
    		'password' => 'admin1',
    		'carrera' => 'Ingenieria en Tecnologias de la Informacion'
    	]);

    	DB::table('users')->insert([
    		'name' => 'Adam Zapel',
    		'email' => 'admin@admin.com',
    		'password' => 'admin1',
    		'carrera' => 'Ingenieria en Tecnologias de la Informacion'
    	]);

    	DB::table('users')->insert([
    		'name' => 'Jose Hector Ramirez',
    		'email' => 'example@example.com',
    		'password' => 'admin1',
    		'carrera' => 'Ingenieria en Tecnologias de la Informacion'
    	]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cultural_rightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cultural_rights')->insert([
        	[
	        	'name' => 'Identidad y patrimonios culturales',

            ],[
	        	'name' => 'Referencia a comunidades culturales',

        	],
            [
	        	'name' => 'Acceso y participacion en la vida cultural',

        	],
            [
	        	'name' => 'Educacion y formacion',

        	],
            [
	        	'name' => 'Informacion y comunicacion',

        	],
            [
	        	'name' => 'Cooper4acion cultural',

        	]
        ]);
    }
}

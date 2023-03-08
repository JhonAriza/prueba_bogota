<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertises')->insert([
        	[
	        	'name' => 'Artes Plasticas',

            ],[
	        	'name' => 'Teatro',

        	],
            [
	        	'name' => 'Danza',

        	],
            [
	        	'name' => 'Cocina Tradicional',

        	],
            [
	        	'name' => 'Juegos Tradicionales',

        	],
            [
	        	'name' => 'Promocion de Lectura',

        	]
        ]);
    }
}

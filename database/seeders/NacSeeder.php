<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nacs')->insert([
        	[
	        	'name' => 'ALCALA',

            ],[
	        	'name' => 'ANDALUCIA',

        	],
            [
	        	'name' => 'ANSERMANUEVO',

        	],
            [
	        	'name' => 'ARGELIA',

        	],
            [
	        	'name' => 'BOLIVAR',

        	],
            [
	        	'name' => 'BUENAAVENTURA',

        	],
            [
	        	'name' => 'BUGA',

        	]
        ]);
    }
}

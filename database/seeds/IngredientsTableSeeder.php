<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "sucre",


                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "farine",

                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "oeufs",

                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "gruyère",
                ]);




        }

}

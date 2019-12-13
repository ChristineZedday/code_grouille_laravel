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

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "fraises",
                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "miel",
                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "scarabée entier",
                    'insecte_id' => "3"
                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "ver de farine entier",
                    'insecte_id' => "1"
                ]);

                DB::table('ingredients')->insert([
                    'nom_ingredient' => "grillon entier",
                    'insecte_id' => "2"
                ]);




        }

}

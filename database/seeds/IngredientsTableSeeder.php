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
            'insecte_id' => "",
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "farine",
            'insecte_id' => "",
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "oeufs",
            'insecte_id' => "",
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "sel",
            'insecte_id' => "",
        ]); 
        
        DB::table('ingredients')->insert([
            'nom_ingredient' => "",
            'insecte_id' => "1",
        ]);
    }
}

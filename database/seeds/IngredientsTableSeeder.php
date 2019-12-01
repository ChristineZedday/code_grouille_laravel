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
            'insecte_id' => "1",
       
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "farine",
            'insecte_id' => "1",
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "oeufs",
            'insecte_id' => "2",
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "gruyere",
            'insecte_id' => "1",
        ]); 
        
       
    }
}

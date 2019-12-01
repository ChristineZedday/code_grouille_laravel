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
            'insecte_id' => NULL,
       
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "farine",
            'insecte_id' => NULL,
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => "oeufs",
            'insecte_id' => NULL,
        ]);

        DB::table('ingredients')->insert([
            'nom_ingredient' => NULL,
            'insecte_id' => "1",
        ]); 
        
       
    }
}

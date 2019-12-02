<?php

use Illuminate\Database\Seeder;

class Ingredients_RecettesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients_recettes')->insert([
            'quantite' => "1",
            'unite_id' => "1",
            'ingredient_id' => "1",
            'recette_id' => "1",
        ]);
    }
}

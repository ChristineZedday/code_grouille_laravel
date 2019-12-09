<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'chemin_image' => "img1.jpg",
            'insecte_id'  => "1"
        ]);
        DB::table('images')->insert([
            'chemin_image' => "img2.jpg",
            'insecte_id'  => "2"
        ]);

        DB::table('images')->insert([
            'chemin_image' => "img3.jpg",
            'insecte_id'  => "3"
        ]);

        DB::table('images')->insert([
            'chemin_image' => "sugg1.jpg",
            'recette_id'  => "1"
        ]);
        DB::table('images')->insert([
            'chemin_image' => "sugg2.jpg",
            'actu_id'  => "1"
        ]);

    }
}

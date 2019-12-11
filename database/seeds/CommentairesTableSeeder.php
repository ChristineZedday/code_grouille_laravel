<?php

use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('commentaires')->insert([
        'texte' => "cette recette est super bonne !",
        'recette_id' => "1",
        'user_id' => "3",

        ]);

    }
}

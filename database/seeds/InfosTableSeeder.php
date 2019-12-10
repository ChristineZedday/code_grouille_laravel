<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'titre' => "Mentions légales",
            'texte' => "Texte des mentions légales",
            ]);

        DB::table('infos')->insert([
            'titre' => "Article 1 à propos",
            'texte' => "Texte article 1",
            ]);

        DB::table('infos')->insert([
           'titre' => "e-mail Asso",
           'email' => "grouille@grouille.fr",
            ]);



    }
}

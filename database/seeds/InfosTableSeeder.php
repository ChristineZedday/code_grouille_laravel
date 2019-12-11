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
            'titre' => "L'association Grouille",
            'texte' => "Dans notre association, nous aimons les insectes y compris dans notre assiette. L'ojectif de notre association est de promouvoir les insectes souvent mal connus ou mal aimés.
            Ces derniers sont généralement considérés comme des animaux nuisibles qu'on cherche à éliminer par tous les moyens et notamment en utilisant des pesticides.
            Mais beaucoup d'insectes sont comestibles et sont très riches en protéines. Ce serait dommage de ne pas en profiter.",
            ]);

        DB::table('infos')->insert([
           'titre' => "e-mail Asso",
           'email' => "grouille@grouille.fr",
            ]);



    }
}

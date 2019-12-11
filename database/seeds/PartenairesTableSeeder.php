<?php

use Illuminate\Database\Seeder;

class PartenairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partenaires')->insert([
            'nom_partenaire' => "Microcox",
            'url' => "https://microcox.pagesperso-orange.fr/",
        ]);

        DB::table('partenaires')->insert([
            'nom_partenaire' => "Bestioles",
            'url' => "https://www.bestioles.ca/",
        ]);

        DB::table('partenaires')->insert([
            'nom_partenaire' => "Concept hygiene",
            'url' => "https://www.concept-hygiene.com/fr/nuisibles/insectes",
        ]);

        DB::table('partenaires')->insert([
            'nom_partenaire' => "Bruno Matignon",
            'url' => "https://www.facebook.com/bruno.matignon.7",
        ]);
    }
}

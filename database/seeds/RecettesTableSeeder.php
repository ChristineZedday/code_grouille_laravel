<?php

use Illuminate\Database\Seeder;

class RecettesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recettes')->insert([
            'titre_recette' => "Titre de ma recette",
            'description_recette' => "description de ma recette. description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.description de ma recette.",
<<<<<<< HEAD
            'temps_preparation_recette' => "50",
            'temps_cuisson_recette' => "10",
=======
            'temps_preparation_recette' => "2",
            'temps_cuisson_recette' => "2",
>>>>>>> d53aa620b4057fbb023ee7272e3025676a09c5fd
            'difficulte_recette' => "1",
            'appetence_recette' => "1",
            'deroule_recette' => "Gemer dibabet war-eeun gouarnerezh dre e war-eeun en vro pe hini deus war-eeun e da e hantererezh war-eeun gwir da.Gemer dibabet war-eeun gouarnerezh dre e war-eeun en vro pe hini deus war-eeun e da e hantererezh war-eeun gwir da.Gemer dibabet war-eeun gouarnerezh dre e war-eeun en vro pe hini deus war-eeun e da e hantererezh war-eeun gwir da.",
            'portion_recette' => "6",
            'user_id' => "1",

            ]);
    }
}

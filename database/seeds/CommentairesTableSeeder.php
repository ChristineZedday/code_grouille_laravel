<?php

use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commentaires')->delete();
        
        \DB::table('commentaires')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'texte' => 'cette recette est super bonne !',
                'recette_id' => 1,
                'user_id' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2019-12-15 14:24:32',
                'updated_at' => '2019-12-15 14:24:32',
                'texte' => 'délicieuse! délectable! exquise! succulente!',
                'recette_id' => 1,
                'user_id' => 3,
            ),
            2 => 
            array (
                'id' => 7,
                'created_at' => '2019-12-15 14:29:20',
                'updated_at' => '2019-12-15 14:29:20',
                'texte' => 'c\'est pas bon avec les fourmis d\'argentine',
                'recette_id' => 5,
                'user_id' => 3,
            ),
            3 => 
            array (
                'id' => 9,
                'created_at' => '2019-12-15 14:31:43',
                'updated_at' => '2019-12-15 14:31:43',
                'texte' => 'j\'ai testé quand j\'étais petite',
                'recette_id' => 5,
                'user_id' => 3,
            ),
            4 => 
            array (
                'id' => 10,
                'created_at' => '2019-12-15 14:32:20',
                'updated_at' => '2019-12-15 14:36:14',
                'texte' => 'j\'adooooooooooore les quiches!',
                'recette_id' => 2,
                'user_id' => 3,
            ),
        ));
        
        
    }
}
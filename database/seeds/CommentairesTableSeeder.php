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
            5 => 
            array (
                'id' => 11,
                'created_at' => '2019-12-15 15:53:35',
                'updated_at' => '2019-12-15 15:53:35',
                'texte' => 'Avec quels insectes?',
                'recette_id' => 1,
                'user_id' => 3,
            ),
            6 => 
            array (
                'id' => 12,
                'created_at' => '2019-12-15 18:40:12',
                'updated_at' => '2019-12-15 18:52:49',
                'texte' => 'accidentellement, les fourmis montaient sur la table du pt\'it dej',
                'recette_id' => 5,
                'user_id' => 3,
            ),
            7 => 
            array (
                'id' => 13,
                'created_at' => '2019-12-16 08:36:36',
                'updated_at' => '2019-12-16 08:36:36',
                'texte' => 'Est-ce qu\'on peut faire avec un autre insecte? parce que franchement, reconnaître la fourmi d\'argentine de la fourmi cro-onde, j\'arrive pas.',
                'recette_id' => 5,
                'user_id' => 2,
            ),
            8 => 
            array (
                'id' => 14,
                'created_at' => '2019-12-16 08:38:12',
                'updated_at' => '2019-12-16 08:38:12',
                'texte' => 'Et quand on est un visage pâle, on fait la recette avec un autre, ou on doit prendre un peau-rouge?',
                'recette_id' => 5,
                'user_id' => 2,
            ),
            9 => 
            array (
                'id' => 15,
                'created_at' => '2019-12-16 08:39:02',
                'updated_at' => '2019-12-16 08:39:02',
                'texte' => 'J\'ai encore plus de mal à trouver des Apaches que des fourmi cro-ondes',
                'recette_id' => 5,
                'user_id' => 2,
            ),
            10 => 
            array (
                'id' => 16,
                'created_at' => '2019-12-16 08:40:43',
                'updated_at' => '2019-12-16 08:40:43',
                'texte' => 'Il y a des apaches à Paris, ou ça a disparu?',
                'recette_id' => 5,
                'user_id' => 3,
            ),
            11 => 
            array (
                'id' => 17,
                'created_at' => '2019-12-16 08:46:42',
                'updated_at' => '2019-12-16 08:46:42',
                'texte' => 'ben en fait, j\'ai pas testé',
                'recette_id' => 7,
                'user_id' => 3,
            ),
        ));
        
        
    }
}
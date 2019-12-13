<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients')->delete();
        
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'sucre',
                'insecte_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'farine',
                'insecte_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'oeufs',
                'insecte_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'gruyère',
                'insecte_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'fraises',
                'insecte_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'miel',
                'insecte_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'scarabée entier',
                'insecte_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'ver de farine entier',
                'insecte_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom_ingredient' => 'grillon entier',
                'insecte_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2019-12-13 19:38:06',
                'updated_at' => '2019-12-13 19:38:06',
                'nom_ingredient' => 'fourmis fraîches',
                'insecte_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2019-12-13 19:44:09',
                'updated_at' => '2019-12-13 19:44:09',
                'nom_ingredient' => 'chocolat',
                'insecte_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2019-12-13 19:44:17',
                'updated_at' => '2019-12-13 19:44:17',
                'nom_ingredient' => 'persil',
                'insecte_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2019-12-13 19:44:26',
                'updated_at' => '2019-12-13 19:44:26',
                'nom_ingredient' => 'beurre',
                'insecte_id' => NULL,
            ),
        ));
        
        
    }
}
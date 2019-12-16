<?php

use Illuminate\Database\Seeder;

class ImageInsecteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_insecte')->delete();
        
        \DB::table('image_insecte')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 67,
                'insecte_id' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 72,
                'insecte_id' => 3,
            ),
            2 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 73,
                'insecte_id' => 4,
            ),
            3 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 75,
                'insecte_id' => 2,
            ),
            4 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 76,
                'insecte_id' => 2,
            ),
            5 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 77,
                'insecte_id' => 2,
            ),
            6 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 78,
                'insecte_id' => 5,
            ),
            7 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'image_id' => 79,
                'insecte_id' => 6,
            ),
        ));
        
        
    }
}
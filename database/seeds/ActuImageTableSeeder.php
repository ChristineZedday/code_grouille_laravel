<?php

use Illuminate\Database\Seeder;

class ActuImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actu_image')->delete();
        
        \DB::table('actu_image')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'actu_id' => 5,
                'image_id' => 72,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'actu_id' => 1,
                'image_id' => 68,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'actu_id' => 1,
                'image_id' => 69,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'actu_id' => 2,
                'image_id' => 70,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'actu_id' => 4,
                'image_id' => 71,
            ),
          
     
        ));
        
        
    }
}
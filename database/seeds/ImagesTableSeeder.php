<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chemin_dossier=public_path('') .'/img/';
        $images = scandir($chemin_dossier);



        foreach ($images as $image)
        {
            $extension = Image::fichier_type($image);
            if ($extension == "jpg" || $extension == "png" || $extension == "gif")

     {  DB::table('images')->insert([
            'chemin_image' => $image

        ]);}

        }
    }
}

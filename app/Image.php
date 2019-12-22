<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\images;

class Image extends Model

{
    public function Recette()
    {
    return $this->belongsTo('App\ImageRecette');
    }

    public function Actu()
    {
    return $this->belongsTo('App\ActuImage');
    }

    public function Insecte()
    {
    return $this->belongsToMany('App\Insecte');
    }

    public function Info()
    {
    return $this->belongsTo('App\ImageInfo');
    }

    public static function fichier_type($uploadedFile)   //static: appelée ailleurs sans instanciation
{
$tabType = explode(".", $uploadedFile);
$nb=sizeof($tabType)-1;
$typeFichier=$tabType[$nb];
 if($typeFichier == "jpeg")
   {
   $typeFichier = "jpg";
   }
$extension=strtolower($typeFichier);
return $extension;

}

public static function charger($uploadedFile, $chemin_dossier)
{
  

      if (file_exists ($chemin_dossier.$uploadedFile ) ) //on a déjà l'image dans le dossier
        {
           //chercher dans la base, le mettre ds images si pas encore

           $image = Image::where('chemin_image', $uploadedFile)->first();  //il peut être dans le dossier sans être dans la base!
           
                if (isset($image))
                  {
                    
                     return $image;
                    
                  }
                  else {
                  
                    $image = new Image(); //on rentre le fichier dans la table image
                    $image->chemin_image = $uploadedFile;
                    $image->save();
                
                    return $image;
                    
                    
                    }
        }

            else
            { //une image qui vient de l'extérieur (pas dans public)
            $extension = Image::fichier_type($uploadedFile); //fonction statique du model Image

            if($extension=="jpg" ||
                $extension=="png" ||
                $extension=="gif")
                    {
                        
                        if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                    {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploadedFile))
                                        {   $image = New Image;
                                            $image->chemin_image =  $uploadedFile;

                                            $image->save();
                                            return $image;

                                        }

                                    }
                    }
                } //fin else: file existe pas
 
                return false;

   }

}

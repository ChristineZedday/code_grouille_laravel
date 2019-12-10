<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    public function Recette()
    {
    return $this->hasOne('App\ImageRecette');
    }

    public function Actu()
    {
    return $this->hasOne('App\ImageActu');
    }

    public function Insecte()
    {
    return $this->hasOne('App\ImageInsecte');
    }

    public function Info()
    {
    return $this->hasOne('App\ImageInfo');
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


}

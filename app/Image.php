<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    public function Recette()
    {
    return $this->hasMany('App\ImageRecette');
    }

    public function Actu()
    {
    return $this->hasMany('App\ImageActu');
    }

    public function Insecte()
    {
    return $this->hasMany('App\ImageInsecte');
    }

    public function Info()
    {
    return $this->hasMany('App\ImageInfo');
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

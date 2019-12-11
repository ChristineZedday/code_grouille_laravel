<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    public function Recette()
    {
    return $this->belongsTo('App\ImageRecette');
    }

    public function Actu()
    {
    return $this->belongsTo('App\ImageActu');
    }

    public function Insecte()
    {
    return $this->belongsTo('App\ImageInsecte');
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



}

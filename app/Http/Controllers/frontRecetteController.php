<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;
Use App\ImageRecette;
use App\Ingredient;
use App\Unite;
use App\Image;
use App\commentaire;
use Auth;

class frontRecetteController extends Controller

{
    public function index(Request $request)
    {
       $recettes = Recette::all();
       return view('pages.recettes',['recettes' => $recettes]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recette = Recette::find($id);

        if (!$recette) {

            return redirect()->action('RecetteController@index');
        }

        $images = $recette->Image;
        $commentaires = $recette->Commentaire;
       
        $ingredients = $recette->Ingredient;

       
        {
            return view('pages.recettesolo',[
                'recette'=> $recette, 'images' =>$images, 'commentaires' => $commentaires, 'ingredients' => $ingredients
            ]);
        }
    }

    public function comment(Request $request, $id)
        {
            $user = Auth::user();
            $recette = Recette::find($id);

            $validated = $request->validate([
                'texte' => 'string|required',]);

            $commentaire= new Commentaire;
            $commentaire->fill($validated); 
            $commentaire->user_id = $user->id;
            $commentaire->recette_id = $recette->id;
            
           $commentaire->save();

           $images = $recette->Image;
           $commentaires = $recette->Commentaire;
           $ingredients = $recette->Ingredient;

           return view('pages.recettesolo',[
            'recette'=> $recette, 'images' =>$images, 'commentaires' => $commentaires, 'ingredients' => $ingredients
        ]);

        }
        
        public function create()
        {
            $ingredients = Ingredient::all(); //pour gérer l'autocomplétion plus tard
            $unites = Unite::all();  //toutes les unités
            return view('membres.postrecette', ['ingredients' => $ingredients, 'unites' => $unites]);
        }
    
        public function store(Request $request)
        {
    
    
            $validated =  $request->validate([
                'titre_recette' => 'string|required',
                'description_recette' => 'string|required',
               'temps_preparation_recette' =>  'integer',
               'temps_cuisson_recette' =>  'integer',
              'difficulte_recette' =>  'string|required',
              'appetence_recette' =>  'string|required',
               'deroule_recette' =>  'string|required',
             'portion_recette' =>  'integer'
            ]);
    
    
    
    
            $newRecette = new Recette;
            $newRecette->fill($validated);
    
    
            $user = Auth::user();
            if (isset($user)) {
                $newRecette ->user_id = $user->id;
            }
    
    
    
            //ici chercher les ingrédients dans le form
    
            if ($newRecette->save()) {
                //une fois la recette sauvée donc a id on lui attache ingrédients et image
    
                $i=0;
                $ingredients = $request->get('ingredient');
    
                $quantites = $request->get('quantite');
    
                $unites = $request->get('unite');
    
    
                for ($i=0; $i<sizeof($ingredients); $i++)
                {
    
                    $nom = strtolower($ingredients[$i]);
    
                    $ingred = Ingredient::where('nom_ingredient', $nom)->first();
    
                    if (isset($ingred))
    
                   {
                         $id = $ingred->id;
    
    
                   }
                    else{
                        //créer l'élément!
    
                        $ingredient = new Ingredient;
    
                        $ingredient->nom_ingredient = $nom;
    
                        $ingredient->save(); //s'il a un insecte l'admin le liera
    
                        $id = $ingredient->id;
                    }
    
    
                        $newRecette->Ingredient()->attach($id, ['quantite' =>  $quantites[$i], 'unite_id' => $unites[$i]]);
    
    
                    }
                }
    
    
    
    
                //pour l'image, une à création possibilité d'en rajouter avec modifier
    
                $chemin_dossier=public_path('') .'/img/';
    
                if (isset($_FILES['image1']['name']))
                {
    
                    $uploaded = $_FILES['image1']['name'];
    
    
    
    
                    if (file_exists ($chemin_dossier.$uploaded ) )
                    {
                         //chercher dans la base, le mettre ds images si pas encore, et ajouter recette_id dans la table pivot
    
                         $image = Image::where('chemin_image', '$uploaded')->first();  //il peut être dans le dossier sans être dans la base!
                                if (!isset($image))
                                {
                                    $image = new Image(); //on rentre le fichier dans la table image
                                    $image->chemin_image = $uploaded;
                                    $image->save();
    
                                }
    
    
    
                            $newRecette->Image()->attach($image->id);
                    }
    
                    else{ //une image qui vient de l'extérieur (pas dans public)
                        $extension = Image::fichier_type($uploaded); //fonction statique du model Image
    
                        if($extension=="jpg" ||
                            $extension=="png" ||
                            $extension=="gif")
                            {
    
    
                                if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                            {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploaded))
                                                {   $image = New Image;
                                                    $image->chemin_image =  $uploaded;
    
                                                    $image->save();
    
                                                    $newRecette->Image()->attach($image->id);
    
    
                                                }
    
                                            }
                            }
                         } //fin else: file existe pas
                } // fin on a uploadé image 1
    
    
                $request->session()->flash('status',"recette enregistrée avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->action('frontRecetteController@index');
            }
    

}




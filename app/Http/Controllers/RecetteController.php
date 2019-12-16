<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Recette;
use App\Commentaire;
use App\Ingredient;
use App\Unite;
use App\User;
use App\Image;
use Illuminate\Support\Facades\Validator;


class RecetteController extends Controller
{

    public function __construct()
    {
      // $this->middleware('auth');
       //$this->middleware('admin');
    }

    /*
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index(Request $request)
    {
        $recettes = Recette::all();

       return view('backpages.backrecettes',['recettes' => $recettes]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all(); //pour gérer l'autocomplétion plus tard
        $unites = Unite::all();  //toutes les unités
        return view('backpages.formrecette', ['ingredients' => $ingredients, 'unites' => $unites]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect()->action('RecetteController@index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredients = Ingredient::all(); //tous les ingrédients de la table
        $unites = Unite::all();  //toutes les unités



        $recette = Recette::find($id);
        $ingrecettes =  $recette->Ingredient;    //les ingrédients de la recette
        $images = $recette->Image;


        if (isset($recette->Ingredient))
        {


            return view('backpages.formrecette',[ 'recette' => $recette,'ingredients' => $ingredients, 'ingrecettes' =>$ingrecettes, 'unites' =>$unites, 'images' => $images]);

        }

            else

        {
                return view('backpages.formrecette',[ 'recette' => $recette,'ingredients' => $ingredients, 'unites' =>$unites, 'images' => $images]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre_recette' => 'string',
            'description_recette' => 'string',
            'temps_preparation_recette' =>  'integer',
            'temps_cuisson_recette' =>  'integer',
            'difficulte_recette' =>  'string',
            'appetence_recette' =>  'string',
            'deroule_recette' =>  'string',
            'portion_recette' =>  'integer',
            'user_id' => 'integer',
        ]);

        $recette = Recette::find($id);
        $recette->fill($validated);
//ici récupérer les ingrédients supprimés:
$ingredients = $recette->Ingredient;

foreach ($ingredients as $ingredient)
        {

            if (isset($_POST['suppring'.$ingredient->id]))
            {
                $recette->Ingredient()->detach($ingredient->id);
            }
        }
        //ici récupérer les ingrédients ajoutes:
        $i=0;
            $ingredients = $request->get('ingredient');


            $quantites = $request->get('quantite');


            $unites = $request->get('unite');

if (!empty($ingredients))
{
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
                   $ingredient->save();
                   $id = $ingredient->id;

                }
                $recette->Ingredient()->attach($id, ['quantite' =>  $quantites[$i], 'unite_id' => $unites[$i]]);

            }
    }

        $images = $recette->Image;

        foreach ($images as $image)
             {

                 if (isset($_POST['suppr'.$image->id]))
                 {

                    //supprimer l'association image/recette

                   $recette->Image()->detach($image->id);


                    //on ne supprime pas l'image ici, prévoir un back images pour
                 }

             }
        $chemin_dossier=public_path('') .'/img/';

         if (isset($_FILES['image1']['name']))
         {
            $uploaded = $_FILES['image1']['name'];

            if (file_exists ($chemin_dossier.$uploaded ) )
                {
                    //chercher dans la base, le mettre ds images si pas encore, et ajouter insecte_id dans la table pivot

                    $image = Image::where('chemin_image', '$uploaded')->first();  //il peut être dans le dossier sans être dans la base!
                    if (!isset($image))
                    {

                        $image = new Image(); //on rentre le fichier dans la table image
                        $image->chemin_image = $uploaded;
                        $image->save();

                    }
                    $recette->Image()->attach($image->id);

                }
                else{
                $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                if($extension=="jpg" ||
                    $extension=="png" ||
                    $extension=="gif")
                    {




                        $chemin_dossier=public_path('') .'/img/';
                        if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                    {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploaded))
                                        {
                                            $image = New Image;
                                            $image->chemin_image =  $uploaded;

                                            $image->save();
                                            $recette->Image()->attach($image->id);
                                        }

                                    }
                    }
                }
         }


        if ($recette->save()) {
            $request->session()->flash('status',"recette mise à jour avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('RecetteController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recette = Recette::find($id);

        if ($recette && $recette->delete()) {

            $recette->Image()->detach();
            $recette->Ingredient()->detach();

            return redirect()->action('RecetteController@index');
        }
    }

    public function add_bookmark(Recette $recette)
    {
        $user = Auth::user();
        $user->bookmarks()->attach($recette->id);
        return back();
    }

    public function remove_bookmark(Recette $recette)
    {
        $user = Auth::user();
        $user->bookmarks()->detach($recette->id);
        return back();
    }

}

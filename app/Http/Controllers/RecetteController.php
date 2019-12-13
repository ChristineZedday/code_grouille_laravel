<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Recette;
use App\Commentaire;
use App\Ingredient;
Use App\Unite;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $ingredients = Ingredient::All();
        $unites = Unite::All();

        return view('backpages.formrecette', ['ingredients' => $ingredients, 'unites' => $unites]); //pour gérer l'autocomplétion
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





        if ($newRecette->save()) {
            //une fois la recette sauvée donc a id on lui attache ingrédients et image

            $i=0;
            $ingredients = $request->get('ingredient');

            $quantites = $request->get('quantite');

            $unites = $request->get('unite_id');



            for ($i=0; $i<sizeof($ingredients); $i++)
            {

                $nom = strtolower($ingredients[$i]);


                $ingred = Ingredient::where('nom_ingredient', $nom)->first();



                if (isset($ingred))

               {

                $id = $ingred->id;
                $newRecette->Ingredient()->attach($id, ['quantite' =>  $quantites[$i], 'unite_id' => $unites[$i]]);

               }
                else{
                    //créer l'élément!
                    dd('pas encore');
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

        if (isset($images) && isset($commentaires))
        {
            return view('pages.recettesolo',[
                'recette'=> $recette, 'images' =>$images, 'commentaires' => $commentaires
            ]);
        }
        elseif (isset($images)) {
            return view('pages.recettesolo',[
                'recette'=> $recette, 'images' =>$images,
            ]);
        }
            elseif (isset($commentaires)) {
                return view('pages.recettesolo',[
                    'recette'=> $recette, 'commentaires' => $commentaires
                ]);
        }
        else  {
            return view('pages.recettesolo',[
                'recette'=> $recette,
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
        $ingredients = Ingredient::all();
        $recette = Recette::find($id);

        if (isset($recette->Ingredient))
        {
            $ingredientId = $recette->Ingredient->ingredient_id;

            return view('backpages.formrecette',[ 'recette' => $recette,'ingredients' => $ingredients, 'ingredientId' =>$ingredientId]);

        }

            else

        {
                return view('backpages.formrecette',[ 'recette' => $recette,'ingredients' => $ingredients]);
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
}

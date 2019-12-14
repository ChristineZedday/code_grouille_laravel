<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;
Use App\ImageRecette;
use App\Image;

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

    public function comment($id)
        {
            $user = Auth::user();
            $recette = Recette::find($id);

            $validated = $request->validate([
                'texte' => 'string|required',]);

            $commentaire= new Commentaire;
            $commentaire->fill($validated); 
            $recette->Commentaire()->attach($user->id, ['texte' => $commentaire->texte]);

        }
        

    

}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Recette;
use App\IngredientRecette;
use App\Ingredient;
use App\User;


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
        return view('backpages.formrecette', ['ingredients' => $ingredients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre_recette' => 'string|required',
            'description_recette' => 'string|required',
            'temps_preparation_recette' =>  'integer',
            'temps_cuisson_recette' =>  'integer',
            'difficulte_recette' =>  'string|required',
            'appetence_recette' =>  'string|required',
            'deroule_recette' =>  'string|required',
            'portion_recette' =>  'integer',
            'user_id' => 'integer',
        ]);



        // $validated['description_recette'] = str_replace("\n", "<br>", $validated['description_recette']);
        // $validated['deroule_recette'] = str_replace("\n", "<br>", $validated['deroule_recette']);
        $newRecette = new Recette;
        $newRecette->fill($validated);


        if ($newRecette->save()) {

            if ($request->input('ingredient_id'))

            {
                $recing = new IngredientRecette();
                $recing->recette_id = $newRecette->id;
                $recing->ingredient_id = $request->input('ingredient_id');
                $recing->save();
            }

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


        return view('backpages.showrecette',[
            'recette'=> $recette,
        ]);
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

            return redirect()->action('RecetteController@index');
        }
    }
}

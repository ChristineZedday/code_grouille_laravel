<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Insecte;
use App\Ingredient;

class IngredientController extends Controller
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

        $ingredients = Ingredient::all();



       return view('backpages.backingredients',['ingredients' => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insectes = Insecte::All();
        return view('backpages.formingredient', ['insectes' => $insectes]);
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

            'nom_ingredient' => 'string|required',
            'insecte_id' => 'integer'

         ]);



        $newIngredient = new Ingredient;
        $newIngredient->fill($validated);


        if ($newIngredient->save()) {


      /*      if ($request->input('insecte_id'))
            {
                $ingins = new IngredientInsecte();
                $ingins->ingredient_id = $newIngredient->id;
                $ingins->insecte_id = $request->input('insecte_id');
                $ingins->save();
            }*/


            $request->session()->flash('status',"ingrédient enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('IngredientController@index');
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
        $ingredient = Ingredient::find($id);

        if (!$ingredient) {

            return redirect()->action('IngredientController@index');
        }

        return view('backpages.showIngredient',[
            'ingredient'=> $ingredient,
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
        $insectes = Insecte::All();
        $ingredient = Ingredient::find($id);


        if (isset($ingredient->Insecte))
        {

            $insecteId = $ingredient->Insecte->id;

            return view('backpages.formingredient',[ 'ingredient' => $ingredient,  'insectes' => $insectes, 'insecteId' =>$insecteId]);
        }

        else
        {
        return view('backpages.formingredient',[ 'ingredient' => $ingredient,  'insectes' => $insectes]);
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

        'nom_ingredient' => 'string|required',
        'insecte_id' => 'integer' ]);



        $ingredient = Ingredient::find($id);
        $ingredient->fill($validated);

        if ($ingredient->save()) {

           //faudra voir si on peut changer l'insecte de l'ingrédient?

            $request->session()->flash('status',"ingredient enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('IngredientController@index');
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
        $ingredient = Ingredient::find($id);

        if ($ingredient && $ingredient->delete()) {

            return redirect()->action('IngredientController@index');
        }
    }
}

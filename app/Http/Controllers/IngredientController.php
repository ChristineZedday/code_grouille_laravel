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


         ]);

        $newIngredient = new Ingredient;
        $newIngredient->fill($validated);

        $newIngredient->nom_ingredient = strtolower($newIngredient->nom_ingredient);
        $nom = $newIngredient->nom_ingredient;
        $ingredient = Ingredient::where('nom_ingredient', $nom)->first();

        if (! $ingredient) //éviter les doublons
        
        {
            if ($request->input('insecte_id'))
            {
                $newIngredient->insecte_id = $request['insecte_id'];
            }


            if ($newIngredient->save()) {



                $request->session()->flash('status',"ingrédient enregistré avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->action('IngredientController@index');
            }
         }
         else
         {
            $request->session()->flash('status',"ingrédient déjà présent");
            $request->session()->flash('alert-class',"alert-warning");
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

            $insecteId = $ingredient->insecte_id;

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
         ]);



        $ingredient = Ingredient::find($id);
        $ingredient->fill($validated);

        $ingredient->nom_ingredient = strtolower($ingredient->nom_ingredient);
        $nom = $ingredient->nom_ingredient;
        $ingred = Ingredient::where('nom_ingredient', $nom)->first();

        if (! $ingred) //éviter les doublons
        
        {

            if ($request->input('insecte_id'))
            {
                $ingredient->insecte_id = $_POST['insecte_id'];

            }


            if ($ingredient->save()) {



                $request->session()->flash('status',"ingredient enregistré avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->action('IngredientController@index');
            }
        }
        else{
            $request->session()->flash('status',"ingrédient déjà présent");
            $request->session()->flash('alert-class',"alert-warning");
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

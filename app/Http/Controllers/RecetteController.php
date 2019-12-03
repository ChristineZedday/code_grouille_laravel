<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Recette;

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



       return view('backpages.backRecettes',['recettes' => $recettes]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpages.formrecette');
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
            'nom_insecte' => 'string|required',
            'nom_latin_insecte' => 'string|required',
            'ordre_insecte' =>  'string|required',
            'description_insecte' =>  'required',

        ]);

        $validated['description_recette'] = str_replace("\n", "<br>", $validated['description_recette']);
        $newInsecte = new Insecte;
        $newInsecte->fill($validated);


        if ($newInsecte->save()) {
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


        return view('backpages.showRecette',[
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
        $recette = Recette::find($id);
        return view('backpages.forminsecte', ['insecte' => $insecte]);
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
            'nom_insecte' => 'string|required',
            'nom_latin_insecte' => 'string|required',
            'ordre_insecte' =>  'string|required',
            'description_insecte' =>  'required',

        ]);

        $insecte = Insecte::find($id);
        $insecte->fill($validated);

        if ($insecte->save()) {
            $request->session()->flash('status',"insecte enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InsecteController@index');
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
        $insecte = Insecte::find($id);

        if ($insecte && $insecte->delete()) {

            return redirect()->action('InsecteController@index');
        }
    }
}

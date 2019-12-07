<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Recette;
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
            'titre_recette' => 'string|required',
            'description_recette' => 'required',
            'temps_preparation_recette' =>  'required',
            'temps_cuisson_recette' =>  'required',
            'difficulte_recette' =>  'required',
            'appetence_recette' =>  'required',
            'deroule_recette' =>  'required',
            'portion_recette' =>  'required',
            'user_id' => 'required',
        ]);

        // $validated['description_recette'] = str_replace("\n", "<br>", $validated['description_recette']);
        // $validated['deroule_recette'] = str_replace("\n", "<br>", $validated['deroule_recette']);
        $newRecette = new Recette;
        $newRecette->fill($validated);


        if ($newRecette->save()) {
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
        $recette = Recette::find($id);
        return view('backpages.formrecette', ['recette' => $recette]);
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
            'titre_recette' => 'string|required',
            'description_recette' => 'required',
            'temps_preparation_recette' =>  'required',
            'temps_cuisson_recette' =>  'required',
            'difficulte_recette' =>  'required',
            'appetence_recette' =>  'required',
            'deroule_recette' =>  'required',
            'portion_recette' =>  'required',
            'user_id' => 'required',
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Middleware\Admin;
use App\Recette;
use App\User;


class frontRecetteController extends Controller

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

            return redirect()->action('frontRecetteController@index');
        }


        return view('pages.recettes',[
            'recette'=> $recette,
        ]);
    }
}

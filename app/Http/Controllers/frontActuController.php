<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Actu;
use App\Image;

class frontActuController extends Controller

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
       $actus = Actu::all();
       return view('pages.actus',['actus' => $actus]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actu = Actu::find($id);

        if (!$actu) {

            return redirect()->action('frontActuController@index');
        }


        return view('pages.actus',[
            'actu'=> $actu, 'images' => $actu->image()->get(),
        ]);
    }
}
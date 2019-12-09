<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Middleware\Admin;
use App\Actu;
use App\Image;

class ShowActus extends Controller
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
        $actus = Actu::find($id);

        if (!$actus) {
            return redirect()->action('ShowActus@index');
        }

        return view('pages.actus',[
            'actu'=> $actus, 'images' => $actu->image()->get(),
        ]);
    }
}

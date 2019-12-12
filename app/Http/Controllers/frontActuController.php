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

    public function show($id)
    {
        $insecte = Actu::find($id);

        if (!$insecte) {

            return redirect()->action('InsecteController@index');
        }

        $images = $insecte->Image;

        if (isset($images))
        {
            return view('pages.actusolo',[
                'insecte'=> $insecte, 'images' =>$images,
            ]);
        }
        else{
            return view('pages.actusolo',[
                'insecte'=> $insecte,
            ]);
        }

    }
}

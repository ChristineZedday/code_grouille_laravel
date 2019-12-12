<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insecte;
Use App\ImageInsecte;
use App\Image;

class frontInsecteController extends Controller

{
    public function index(Request $request)
    {
       $insectes = Insecte::all();
       return view('pages.insectes',['insectes' => $insectes]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insecte = Insecte::find($id);

        if (!$insecte) {

            return redirect()->action('InsecteController@index');
        }

        $images = $insecte->Image;

        if (isset($images))
        {
            return view('pages.insectesolo',[
                'insecte'=> $insecte, 'images' =>$images,
            ]);
        }
        else{
            return view('pages.insectesolo',[
                'insecte'=> $insecte,
            ]);
        }

    }

}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actu;
use App\Recette;
use App\info;
use App\Image;
Use App\ActuImage;
Use App\ImageRecette;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $editoactu = Actu::find(4);
        $lastactu = Actu::orderBy('created_at', 'desc')->first();
        $lastrecettes = Recette::orderBy('created_at', 'desc')->take(3)->get();

        $imactus = $editoactu->Image;


        return view('pages.home', ['lastactu'=> $lastactu, 'lastrecettes' => $lastrecettes, 'editoactu' => $editoactu,  'imactus' => $imactus ]);

    }



    public function showapropospara1()
    {
        $apropospara1 = Info::find(2);
        $apropospara2 = Info::find(3);

        return view('pages.apropos', ['apropospara1' => $apropospara1, 'apropospara2' => $apropospara2]);
    }

}

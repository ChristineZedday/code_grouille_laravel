<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actu;
use App\Recette;


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
        return view('pages.home');
    }

    public function lastactu()
    {
        $lastactu = Actu::orderBy('created_at', 'desc')->first();
        $lastrecettes = Recette::orderBy('created_at', 'desc')->take(3)->get();
             // $lastactu = Actu::lastest();
        return view('pages.home', ['lastactu'=> $lastactu, 'lastrecettes' => $lastrecettes ]);
    }

}

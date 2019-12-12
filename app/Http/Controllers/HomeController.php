<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $lastactu = Actu::orderBy('created_at', 'desc')->get();
        // return view('pages.home');
        $lastactu = DB::table('actus')
        ->latest();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsController extends Controller
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
        $insectes = Mentions::all();



       return view('backpages.showMentions',['mentions' => $mentions]);
    }

   
}

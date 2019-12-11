<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class frontInfoController extends Controller
{
    public function showmentions()
    {
        $mentions = Info::find(1);

        return view('pages.mentions', ['mentions' => $mentions]);
    }

    public function showapropospara1()
    {
        $apropospara1 = Info::find(2);

        return view('pages.apropos', ['apropospara1' => $apropospara1]);
    }
}

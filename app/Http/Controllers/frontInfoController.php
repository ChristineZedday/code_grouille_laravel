<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class frontInfoController extends Controller
{
    public function showmention($id)
    {
        $mentions = Info[1];

        return view('pages.mentions');
    }
}

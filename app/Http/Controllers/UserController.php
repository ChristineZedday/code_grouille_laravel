<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function verify(Request $request)
   {
    return view('membres.dashboard');
   }
}

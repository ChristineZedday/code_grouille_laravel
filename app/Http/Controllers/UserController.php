<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function verify(Request $request)
   {
    if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return view('membres.dashboard');
        }
    }


   public function store(Request $request)
   {
    $validated = $request->validate([
        'name' => 'string|required',
        'email' => 'string|required',
        'password' => 'password:api|required',
    ]);

    $user = new User;
    $user->fill($validated);

    if ($user->save()) {
        $user->session()->flash('status',"membre enregistré avec succès");
        $user->session()->flash('alert-class',"alert-success");
        return view('membres.dashboard');
    }
}


public function __construct()
{
    $this->middleware('auth');
}

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */

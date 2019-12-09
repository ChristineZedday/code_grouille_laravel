<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\User;

class UserController extends Controller
{
   public function verify(Request $request)
   {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();
            if ($user->role="admin"){
            return view('backpages.back');
            }
            else
            {  return view('membres.dashboard'); }
        }
        else { return view('pages.registration');}
    }


   public function store(Request $request)
   {
    $validated = $request->validate([
        'name' => 'string|required',
        'email' => 'string|required',
        'password' => 'string|required',
    ]);

    $user = new User;
    $user->fill($validated);
    $user->role = "utilisateur";
    $user->password = bcrypt($user->password);

    if ($user->save()) {
        session()->flash('status',"membre enregistré avec succès");
        session()->flash('alert-class',"alert-success");
        return view('membres.dashboard');
    }
}

public function deconnexion()
{
    auth()->logout();

    return redirect('/');
}

}

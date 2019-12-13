<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Recette;
use App\RecetteUser;

class RecetteUserController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        if  ($user){
            $bookmarks = $user->bookmarks;
            return view('pages.favoris', ['recettes' => $bookmarks]);

        }else{
            return redirect('/login');

        }
    }

    public function add(Request $request, $id)
    {
        $user = Auth::user();
        if  ($user){
            $user->bookmarks()->attach($id);
            return back();
        }else{
            return redirect('/login');
        }
    }

    public function remove(Request $request, $id)
    {
        $user = Auth::user();
        if  ($user){
            $user->bookmarks()->detach($id);
            return back();
        }else{
            return redirect('/login');

        }
    }
}

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
       if ($user) {
            $bookmarks = $user->bookmark;
            dd($bookmarks);
       }
       return redirect('/login');
    }
       return view('pages.actus',['actus' => $actus]);
}

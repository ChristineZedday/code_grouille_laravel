<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{


    public function create()
    {



        return view('pages.contact');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'string|required',
            'prenom' => 'string|nullable',
            'telephone' => 'string|required',
            'email' => 'email|required',
            'msg' => 'string|required',

        ]);

        Mail::to('administrateur@chezmoi.com')
            ->send(new Contact($request->except('_token')));

        return redirect()->back->with('message', 'merci pour votre demande de contact');
    }


}

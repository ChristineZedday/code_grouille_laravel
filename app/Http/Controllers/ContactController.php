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
            'nom' => 'string|required',

        ]);

        Mail::send('pages.contactmessage', ['msg'=>$request->message],
        function ($mail) use ($request) {
            $mail->from($request->email, $request->nom);
            $mail->to('mguillou5670@gmail.com')->subject('Demande de contact');
        } );

        return redirect()->back->with('message', 'merci pour votre demande de contact');
    }


}

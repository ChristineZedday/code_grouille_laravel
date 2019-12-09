<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Mention;

class MentionController extends Controller


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
    public function index()
    {
        $mentions = Mention::all();

        return view('backpages.backMention',['mentions' => $mentions]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mention = Mention::find($id);
        return view('backpages.formMention', ['mention' => $mention]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'texte_mentions' => 'required',

         ]);

        $mention = Mention::find($id);
        $mention->fill($validated);

        if ($mention->save()) {
            $request->session()->flash('status',"Membre mis à jour avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('MentionController@index');
        }
    }



}

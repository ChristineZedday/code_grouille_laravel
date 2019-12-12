<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;
//appeler le modèle

class CommentaireController extends Controller
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
    public function index(Request $request)
    {
        $commentaires = Commentaire::all();



       return view('backpages.backCommentaires',['commentaires' => $commentaires]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commentaire =Commentaire::find($id);

        if (!$commentaire) {

            return redirect()->action('CommentaireController@index');
        }


        return view('backpages.showCommentaire',[
            'commentaire'=> $commentaire,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commentaire = Commentaire::find($id);
        return view('backpages.formcommentaire', ['commentaire' => $commentaire, 'user' => $commentaire->user]);
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
            'texte' => 'string|required',

        ]);

        $commentaire = Commentaire::find($id);
        $commentaire->fill($validated);

        if ($commentaire->save()) {
            $request->session()->flash('status',"commentaire enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('CommentaireController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commentaire = CommentaireRecette::find($id);

        if ($commentaire && $commentaire->delete()) {

            return redirect()->action('CommentaireController@index');
        }
    }
}

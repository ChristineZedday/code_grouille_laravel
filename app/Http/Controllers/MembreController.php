<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MembreController extends Controller
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
        $users = User::all();

       return view('backpages.backMembres',['users' => $users]);
    }
   

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('backpages.formMembre');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'titre_user' => 'string|required',
    //         'description_user' => 'string|required',
    //         'temps_preparation_user' =>  'required',
    //         'temps_cuisson_user' =>  'required',
    //         'difficulte_user' =>  'required',
    //         'appetence_user' =>  'required',
    //         'deroule_user' =>  'required',
    //         'portion_user' =>  'required',
    //     ]);

    //     $newUser = new User;
    //     $newUser->fill($validated);


    //     if ($newUser->save()) {
    //         $request->session()->flash('status',"membre enregistrée avec succès");
    //         $request->session()->flash('alert-class',"alert-success");
    //         return redirect()->action('MembreController@index');
    //     }
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {

            return redirect()->action('MembreController@index');
        }


        return view('backpages.ShowMembre',[
            'user'=> $user,
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
        $user = User::find($id);
        return view('backpages.formMembres', ['user' => $user]);
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
            'name_user' => 'string|required',
            'email_user' => 'required',
            'password_user' =>  'required',
            'role_user' =>  'required',
         ]);

        $user = User::find($id);
        $user->fill($validated);

        if ($user->save()) {
            $request->session()->flash('status',"Membre mis à jour avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('MembreController@index');
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
        $user = User::find($id);

        if ($user && $user->delete()) {

            return redirect()->action('MembreController@index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Insecte;
use App\Image;

class InsecteController extends Controller
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
        $insectes = Insecte::all();



       return view('backpages.backInsectes',['insectes' => $insectes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpages.forminsecte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_insecte' => 'string|required',
            'nom_latin_insecte' => 'string|required',
            'ordre_insecte' =>  'string|required',
            'description_insecte' =>  'required',

        ]);


        $newInsecte = new Insecte;
        $newInsecte->fill($validated);


        if ($newInsecte->save()) {

            $chemin_dossier=public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
               

                $uploaded = $_FILES['image1']['name'];

                $image = Image::charger($uploaded, $chemin_dossier); 
                //copie ds le dossier si pas présente, copie en base si pas présente

                $newInsecte->Image()->attach($image->id);
            }

            $request->session()->flash('status',"insecte enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InsecteController@index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insecte = Insecte::find($id);
        $images = $insecte->Image;

        return view('backpages.forminsecte', ['insecte' => $insecte,
        'images' =>$images]);
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
            'nom_insecte' => 'string|required',
            'nom_latin_insecte' => 'string|required',
            'ordre_insecte' =>  'string|required',
            'description_insecte' =>  'required',

        ]);

        $insecte = Insecte::find($id);
        $insecte->fill($validated);

        $imgins = $insecte->Image;



        foreach ($imgins as $imgin)
             {



                 if (isset($_POST['suppr'.$imgin->id])) //ce sont les imgins qui ont été transmises dans le form, ce sont bien elles qu'on doit effacer
                 {

                    //supprimer l'association image/insecte
                   
                   $insecte->Image()->detach($imgin->id); //detach ne suffit pas!
                   

                    //on ne supprime pas l'image ici, prévoir un back images pour
                 }



             }
        $chemin_dossier=public_path('') .'/img/';

         if (isset($_FILES['image1']['name']))
         {
            $uploaded = $_FILES['image1']['name'];
            $image = Image::charger($uploaded, $chemin_dossier);
          
                $insecte->Image()->attach($image->id);
                           
         }


        if ($insecte->save()) {
            $request->session()->flash('status',"insecte enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InsecteController@index');
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
        $insecte = Insecte::find($id);

      

        if ($insecte && $insecte->delete()) {

            $insecte->Image()->detach(); //toutes les images s'il y en a

            return redirect()->action('InsecteController@index');
        }
    }
}

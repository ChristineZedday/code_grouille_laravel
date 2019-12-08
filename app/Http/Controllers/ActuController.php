<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Actu;
use App\Image;

class ActuController extends Controller
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

       
        $actus = Actu::all();



       return view('backpages.backActus',['actus' => $actus]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('backpages.formactu');
        }
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
            'titre_actu' => 'string|required',
            'texte_actu' => 'required',
            'resume_actu' =>  'required',
        ]);


        $newactu = new Actu;
        $newactu->fill($validated);


        if ($newactu->save()) {

            if (isset($_FILES['image1']['name']))
            {
                $uploaded = $_FILES['image1']['name'];
                $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                if($extension=="jpg" ||
                    $extension=="png" || 
                    $extension=="gif")
                    {
                       
                        
                       
                        $chemin_image="actu" . $newactu->id . "_1." . $extension; //qd save, on a son id!
                        $chemin_dossier=public_path('') .'/img/';
                        if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                    {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$chemin_image))
                                        {   $image = New Image;
                                            $image->chemin_image =  $chemin_image;
                                            $image->actu_id = $newactu->id;
                                            $image->save();
                                        }	
                                                    
                                     }            
                   }
            }

            $request->session()->flash('status',"actu enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");

            return redirect()->action('ActuController@index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actu = Actu::find($id);

        if (!$actu) {

            return redirect()->action('ActuController@index');
        }


        return view('backpages.showActu',[
            'actu'=> $actu, 'images' => $actu->image()->get(),
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
        $actu = Actu::find($id);
        return view('backpages.formactu', [
            'actu'=> $actu,
        ]);
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
            'titre_actu' => 'string|required',
            'texte_actu' => 'required',
            'resume_actu' =>  'required',
        ]);

        $actu = Actu::find($id);
        $actu->fill($validated);

        if ($actu->save()) {
            $request->session()->flash('status',"actu enregistrée avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('ActuController@index');
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
        $actu = Actu::find($id);

        if ($actu && $actu->delete()) {

            return redirect()->action('ActuController@index');
        }
    }
}

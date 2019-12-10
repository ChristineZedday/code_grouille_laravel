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

            $chemin_dossier=public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
                $uploaded = $_FILES['image1']['name'];

                if (file_exists ($chemin_dossier.$uploaded ) )
                {
                     //chercher dans la base et ajouter actu_id
                     $id = DB::table('images')->where('chemin_image', '$uploaded')->value('id');
                     $image = Image::find($id);
                     $image->actu_id = $actu->id;

                }

                else{
                    $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                    if($extension=="jpg" ||
                        $extension=="png" ||
                        $extension=="gif")
                        {


                            if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                        {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploaded))
                                            {   $image = New Image;
                                                $image->chemin_image =  $uploaded;
                                                $image->actu_id = $newactu->id;
                                                $image->save();
                                            }

                                        }
                        }
                     } //fin else: file existe pas
            } // fin on a uploadé image 1

            if (isset($_FILES['image2']['name']))
                {
                    $uploaded = $_FILES['image2']['name'];
                        if (file_exists ($chemin_dossier.$uploaded ) )
                        {
                            //chercher dans la base et ajouter actu_id
                            $id = DB::table('images')->where('chemin_image', '$uploaded')->value('id');
                            $image = Image::find($id);
                            $image->actu_id = $actu->id;

                        }

                        else{

                                {

                                    $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                                    if($extension=="jpg" ||
                                        $extension=="png" ||
                                        $extension=="gif")
                                        {




                                            $chemin_dossier=public_path('') .'/img/';
                                            if(is_uploaded_file($_FILES['image2']['tmp_name']))
                                                        {  	if(copy($_FILES['image2']['tmp_name'], $chemin_dossier.$uploaded))
                                                            {   $image = New Image;
                                                                $image->chemin_image =  $uploaded;
                                                                $image->actu_id = $newactu->id;
                                                                $image->save();
                                                            }

                                                        }
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
        $images = $actu->image()->get();

        return view('backpages.formactu', [
            'actu'=> $actu, 'images' =>$images
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

       $images = $actu->image()->get();


       foreach ($images as $image)
            {



                if (isset($_POST['suppr'.$image->id]))
                {

                    if (isset($image->insecte_id) || isset($image->recette_id))
                    {
                        $image->actu_id = null;
                    }
                     else{
                    $image->delete(); //enlève de la base mais supprime pas fichier, faire une f pour ça ds Image
                }


                }

            }

        if (isset($_FILES['image1']['name']))
        {
            $uploaded = $_FILES['image1']['name'];
            $extension = Image::fichier_type($uploaded); //fonction statique du model Image

            if($extension=="jpg" ||
                $extension=="png" ||
                $extension=="gif")
                {




                    $chemin_dossier=public_path('') .'/img/';
                    if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploaded))
                                    {   $image = New Image;
                                        $image->chemin_image =  $uploaded;
                                        $image->actu_id = $actu->id;
                                        $image->save();
                                    }

                                 }
               }
        }

        if (isset($_FILES['image2']['name']))
        {
            $uploaded = $_FILES['image2']['name'];
            $extension = Image::fichier_type($uploaded); //fonction statique du model Image

            if($extension=="jpg" ||
                $extension=="png" ||
                $extension=="gif")
                {




                    $chemin_dossier=public_path('') .'/img/';
                    if(is_uploaded_file($_FILES['image2']['tmp_name']))
                                {  	if(copy($_FILES['image2']['tmp_name'], $chemin_dossier.$uploaded))
                                    {   $image = New Image;
                                        $image->chemin_image =  $uploaded;
                                        $image->actu_id = $actu->id;
                                        $image->save();
                                    }

                                 }
               }
        }

        if ($actu->save()) {
            $request->session()->flash('status',"actu modifiée avec succès");
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

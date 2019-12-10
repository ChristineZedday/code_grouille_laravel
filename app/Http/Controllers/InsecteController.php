<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Insecte;
Use App\ImageInsecte;
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




                if (file_exists ($chemin_dossier.$uploaded ) )
                {
                     //chercher dans la base et ajouter insecte_id
                     $id = Images::where('chemin_image', '$uploaded')->first()->id;

                     $imgins = new ImageInsecte();
                     $imgins->image_id = $id;
                     $imgins->insecte_id = $newInsecte->id;
                     $imgins->save();

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

                                                $image->save();

                                                $imgins = new ImageInsecte();
                                                $imgins->image_id = $image->id;
                                                $imgins->insecte_id = $newInsecte->id;
                                                $imgins->save();


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
                            //chercher dans la base et ajouter insecte_id
                            $imgins = new ImageInsecte();
                            $imgins->image_id = $id;
                            $imgins->insecte_id = $newInsecte->id;
                            $imgins->save();
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
                                                            {    $image = New Image;
                                                                $image->chemin_image =  $uploaded;

                                                                $image->save();

                                                                $imgins = new ImageInsecte();
                                                                $imgins->image_id = $image->id;
                                                                $imgins->insecte_id = $newInsecte->id;
                                                                $imgins->save();
                                                            }

                                                        }
                                    }
                                }
                        }
                }


            $request->session()->flash('status',"insecte enregistré avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InsecteController@index');
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
        $insecte = Insecte::find($id);

        if (!$insecte) {

            return redirect()->action('InsecteController@index');
        }


        return view('backpages.showInsecte',[
            'insecte'=> $insecte, 'images' => $insecte->image()->get(),
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
        $insecte = Insecte::find($id);
        $images = $insecte->image()->get();
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

        $images = $insecte->image()->get();


        foreach ($images as $image)
             {



                 if (isset($_POST['suppr'.$image->id]))
                 {

                    //supprimer l'association image/insecte
                    $imid = DB::table('image_insectes')->where('image_id', '$image->id')->value('id');
                    $imins = ImageInsecte::find($imid);
                    $imins->delete();

                    //on ne supprime pas l'image ici, prévoir un back images pour
                 }



             }

         if (isset($_FILES['image1']['name']))
         {
            $uploaded = $_FILES['image1']['name'];

            if (file_exists ($chemin_dossier.$uploaded ) )
                {
                    //chercher dans la base et ajouter insecte_id
                    $id = DB::table('images')->where('chemin_image', '$uploaded')->value('id');

                    $imgins = new ImageInsecte();
                    $imgins->image_id = $id;
                    $imgins->insecte_id = $insecte->id;
                    $imgins->save();


                }
                else{
                $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                if($extension=="jpg" ||
                    $extension=="png" ||
                    $extension=="gif")
                    {




                        $chemin_dossier=public_path('') .'/img/';
                        if(is_uploaded_file($_FILES['image1']['tmp_name']))
                                    {  	if(copy($_FILES['image1']['tmp_name'], $chemin_dossier.$uploaded))
                                        {
                                            $image = New Image;
                                            $image->chemin_image =  $uploaded;

                                            $image->save();

                                            $imgins = new ImageInsecte();
                                            $imgins->image_id = $image->id;
                                            $imgins->insecte_id = $insecte->id;
                                            $imgins->save();
                                        }

                                    }
                    }
                }
         }
         if (isset($_FILES['image2']['name']))
         {
            $uploaded = $_FILES['image2']['name'];

            if (file_exists ($chemin_dossier.$uploaded ) )
                {
                    //chercher dans la base et ajouter insecte_id
                    $id = DB::table('images')->where('chemin_image', '$uploaded')->value('id');

                    $imgins = new ImageInsecte();
                    $imgins->image_id = $id;
                    $imgins->insecte_id = $insecte->id;
                    $imgins->save();


                }
                else{
                $extension = Image::fichier_type($uploaded); //fonction statique du model Image

                if($extension=="jpg" ||
                    $extension=="png" ||
                    $extension=="gif")
                    {




                        $chemin_dossier=public_path('') .'/img/';
                        if(is_uploaded_file($_FILES['image2']['tmp_name']))
                                    {  	if(copy($_FILES['image2']['tmp_name'], $chemin_dossier.$uploaded))
                                        {
                                            $image = New Image;
                                            $image->chemin_image =  $uploaded;

                                            $image->save();

                                            $imgins = new ImageInsecte();
                                            $imgins->image_id = $image->id;
                                            $imgins->insecte_id = $insecte->id;
                                            $imgins->save();
                                        }

                                    }
                    }
                }
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

            return redirect()->action('InsecteController@index');
        }
    }
}

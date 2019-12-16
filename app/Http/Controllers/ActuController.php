<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Actu;
use App\Image;
use App\ImageActu;

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


        $newActu = new Actu;
        $newActu->fill($validated);


        if ($newActu->save()) {

            $chemin_dossier=public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
                $uploaded = $_FILES['image1']['name'];

                if (file_exists ($chemin_dossier.$uploaded ) )
                {
                     //chercher dans la base, le mettre ds images si pas encore, et ajouter actu_id dans la table pivot

                     $image = Image::where('chemin_image', '$uploaded')->first();  //il peut être dans le dossier sans être dans la base!
                            if (isset($image))
                            {
                                $imid = $image->id;

                            }
                            else{
                                $image = new Image(); //on rentre le fichier dans la table image
                                $image->chemin_image = $uploaded;
                                $image->save();

                            }
                            $newActu->Image()->attach($image->id);
                }

                else{
                    $extension = Image::fichier_type($uploaded);

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

                                                $newActu->Image()->attach($image->id);
                                            }

                                        }
                        }
                     } //fin else: file existe pas
            } // fin on a uploadé image 1



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
        $images = $actu->Image;

        return view('backpages.formactu', [
            'actu'=> $actu, 'images' =>$images ]);
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

       $images = $actu->Image;


       foreach ($images as $image)
            {

                if (isset($_POST['suppr'.$image->id]))
                {

                    $actu->Image()->detach($images->id);

                }


            }

            $chemin_dossier=public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
               $uploaded = $_FILES['image1']['name'];

               if (file_exists ($chemin_dossier.$uploaded ) )
                   {
                       //chercher dans la base, le mettre ds images si pas encore, et ajouter actu_id dans la table pivot

                       $image = Image::where('chemin_image', '$uploaded')->first();  //il peut être dans le dossier sans être dans la base!
                       if (isset($image))
                       {
                           $imid = $image->id;

                       }
                       else{
                           $image = new Image(); //on rentre le fichier dans la table image
                           $image->chemin_image = $uploaded;
                           $image->save();

                       }
                       $actu->Image()->attach($image->id);

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
                                               $actu->Image()->attach($image->id);
                                           }

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

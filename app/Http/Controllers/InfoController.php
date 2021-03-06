<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Image;

class InfoController extends Controller
{
    public function __construct()
    {
      // $this->middleware('auth');
       //$this->middleware('admin');
    }

    /**
     * Display a listing of
     * resourcew.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $infos = Info::all();

       return view('backpages.backInfos',['infos' => $infos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpages.formInfo');
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
            'titre' => 'string',
            'texte' => 'text',
            'email' => 'string',

        ]);

        $newInfo = new Info;
        $newInfo->fill($validated);


        if ($newInfo->save()) {

            $chemin_dossier= public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
               
    
                $uploaded = $_FILES['image1']['name'];
                $tmp = $_FILES['image1']['tmp_name'];
               
    
                $image = Image::verifier_presence($uploaded, $chemin_dossier); 
                //copie en base si présente dans le dossier mais pas en base
                if ($image)
                {
                $newInfo->Image()->attach($image->id);
                }
                else 
                {
               if (Image::est_image($uploaded))
                    {
                        if (move_uploaded_file($tmp, $chemin_dossier.$uploaded))
                            {
                                $image = new Image;
                                $image->chemin_image = $uploaded;
                                $image->save();
                                $newInfo->Image()->attach($image->id);
                            }
                    }
                }
            }


            $request->session()->flash('status',"Info site mise à jour avec succès !");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InfoController@index');
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
        $info = Info::find($id);

        if (!$info) {

            return redirect()->action('InfoController@index');
        }


        return view('backpages.ShowInfo',[
            'info'=> $info,
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
        $info = Info::find($id);
        $images = $info->Image;
        return view('backpages.formInfo', ['info' => $info, 'images' =>$images]);
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
            'titre' => 'string',
            'texte' => 'string',
            'email' => 'string',
         ]);

        $info = Info::find($id);
        $info->fill($validated);

        if ($info->save()) {

            $chemin_dossier= public_path('') .'/img/';

            if (isset($_FILES['image1']['name']))
            {
               
    
                $uploaded = $_FILES['image1']['name'];
                $tmp = $_FILES['image1']['tmp_name'];
               
    
                $image = Image::verifier_presence($uploaded, $chemin_dossier); 
                //copie en base si présente dans le dossier mais pas en base
                if ($image)
                {
                $info->Image()->attach($image->id);
                }
                else 
                {
               if (Image::est_image($uploaded))
                    {
                        if (move_uploaded_file($tmp, $chemin_dossier.$uploaded))
                            {
                                $image = new Image;
                                $image->chemin_image = $uploaded;
                                $image->save();
                                $info->Image()->attach($image->id);
                            }
                    }
                }
            }



            $request->session()->flash('status',"Info site mise à jour avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('InfoController@index');
        }
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}

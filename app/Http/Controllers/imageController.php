<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('backpages.backImages',['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpages.formImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chemin_dossier=public_path('') .'/img/';
        

     

       if (isset($_FILES ['image1'] ['name']))
        {
            
            $uploaded = $_FILES['image1']['name'];
            $tmp = $_FILES['image1']['tmp_name'];

            $image = Image::verifier_presence($uploaded, $chemin_dossier); 
            if (!$image)
                {
                    if (Image::est_image($uploaded))
                    {
                        if (move_uploaded_file($tmp, $chemin_dossier.$uploaded))
                            {
                                $image = new Image;
                                $image->chemin_image = $uploaded;
                                $image->save();
                            }
                    } 
                }
           
           
        }
        

        if ($image)
        {
            $request->session()->flash('status',"image enregistrée avec succès");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->action('ImageController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    // public function show(Image $image)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);

      

        if ($image && $image->delete()) {

            

            return redirect()->action('ImageController@index');
        }
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AtractiveRequest;
use App\Atractive;

use Illuminate\Support\Facades\Input;

class AtractiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $atractive = Atractive::where('user_id', $request->user()->id)->get();
        return view('capturista.index',[
            'atractive' => $atractive
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capturista.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtractiveRequest $request)
    {   
           $file = Input::file('image');
           //Creamos una instancia de la libreria instalada   
           $image = \Image::make(\Input::file('image'));
           //Ruta donde queremos guardar las imagenes
           $path = public_path().'/atractives/';

           // Guardar Original
           $image->save($path.$file->getClientOriginalName());
           // Cambiar de tamaño
           $image->resize(240,200);
           // Guardar
           $image->save($path.'thumb_'.$file->getClientOriginalName());
           
           //Guardamos nombre y nombreOriginal en la BD
           $image = $file->getClientOriginalName();

        $request->user()->atractive()->create([
            'name' => $request->name,
            'region' =>$request->region,
            'province' =>$request->province,
            'district' => $request->district,
            'category' => $request->category,
            'type' =>$request->type,
            'sub_type' =>$request->sub_type,
            'description' =>$request->description,
            'particularities' =>$request->particularities,
            'actual_state' =>$request->actual_state,
            'observations' => $request->observations,
            'type_visit' =>$request->type_visits,
            'land' =>$request->land,
            'aereal' =>$request->aereal,
            'maritime' =>$request->maritime,
            'river' =>$request->river,
            'name_image' => $request->name_image,
            'image' => $image,

            ]);
            return redirect('/atractive');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('capturista.edit',[
                'atractive'=> $atractive
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AtractiveRequest $request, Atractive $atractive)
    {
        $this->authorize('owner',$atractive);
        $atractive->update($request->all());
         return redirect('/atractive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('owner',$atractive);
        $atractive->delete();
        return redirect('/atractive');
    }
}

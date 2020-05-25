<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clubs;

class ClubControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club = Clubs::all();
        return view('club.index',compact('club'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $club = Clubs::all();
        return view('club.create',compact('club'))->with('uploadfiles', $uploadfiles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ruta = public_path() . '/upload';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($ruta, $fileName);
            
    
            $clubs = new Clubs;
            $clubs->imagen = $fileName;
            $clubs->nombre = $request->nombre;
            $clubs->detalle = $request->detalle;
            $clubs->info = $request->info;
            $clubs->save();
            }
            //$request->session()->flash('notificacion', 'se ha subido el archivo:'. $fileName);
            return redirect('clubs');
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
    public function edit($idcl)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $clubs = Clubs::find($idcl);
        return view('club.edit', compact('clubs'))->with('uploadfiles', $uploadfiles);
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
        $clubs = new Clubs;
            
            $clubs->nombre = $request->nombre;
            $clubs->detalle = $request->detalle;
            $clubs->info = $request->info;
            

        if($request->hasFile('file')){
            $file = $request->file('file');
            $ruta = public_path() . '/upload';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($ruta, $fileName);

            $clubs->imagen = $fileName;

            $clubs->save();
            
            }
            return redirect('clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcl)
    {
        $clubs = Clubs::find($idcl);
        $clubs->delete();
        return redirect('clubs');
    }

    public function todos()
    {
        $club = Clubs::all();
        return view('club.todos',compact('club'));
    }
    public function detalles($idcl)
    {
        $clubs = Clubs::find($idcl);
        return view('club.detalle',compact('clubs'));
    }
}

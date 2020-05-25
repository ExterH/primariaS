<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filles;

class FillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fille = Filles::all();
        return view('filles.index',compact('fille'));
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
        $fille = Filles::all();
        return view('filles.create',compact('fille'))->with('uploadfiles', $uploadfiles);
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
            
    
            $filles = new Filles;
            $filles->imagen = $fileName;
            $filles->nombre = $request->nombre;
            $filles->detalle = $request->detalle;
            $filles->save();
            }
            return redirect('filles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idf)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $filles = Filles::find($idf);
        return view('filles.detalle', compact('filles'))->with('uploadfiles', $uploadfiles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idf)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $filles = Filles::find($idf);
        return view('filles.edit', compact('filles'))->with('uploadfiles', $uploadfiles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idf)
    {
        $filles = Filles::find($idf);
            $filles->nombre = $request->nombre;
            $filles->imagen = $request->imagen;
            $filles->detalle = $request->detalle;

            if($request->hasFile('file')){
                $file = $request->file('file');
                $ruta = public_path() . '/upload';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($ruta, $fileName);

                $filles->imagen = $fileName;
            }
            $filles->save();
            return redirect('/filles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idf)
    {
        $filles = Filles::find($idf);
        $filles->delete();
        return redirect('/filles');
    }
}

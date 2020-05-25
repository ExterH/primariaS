<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Anuncios;

class AnunciosController extends Controller
{
    public function index()
    {
        $anuncio = Anuncios::all();
        return view('anuncios.index',compact('anuncio'));
    }
    public function create()
    {

        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $anuncio = Anuncios::all();
        return view('anuncios.create',compact('anuncio'))->with('uploadfiles', $uploadfiles);
    }
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ruta = public_path() . '/upload';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($ruta, $fileName);
            
    
            $anuncios = new Anuncios;
            $anuncios->imagen = $fileName;
            $anuncios->titulo = $request->titulo;
            $anuncios->detalle = $request->detalle;
            $anuncios->url = $request->url;
            $anuncios->info = $request->info;
            $anuncios->save();
            }
            //$request->session()->flash('notificacion', 'se ha subido el archivo:'. $fileName);
            return back()->with('alert', 'Guardado con exito');
            
    }
    public function edit($idadd)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $anuncios = Anuncios::find($idadd);
        return view('anuncios.edit', compact('anuncios'))->with('uploadfiles', $uploadfiles);
    }
    public function update(Request $request, $idadd)
    {
        
            $anuncios = Anuncios::find($idadd);
            $anuncios->imagen = $request->imagen;
            $anuncios->titulo = $request->titulo;
            $anuncios->detalle = $request->detalle;
            $anuncios->info = $request->info;
            $anuncios->url = $request->url;

            if($request->hasFile('file')){
                $file = $request->file('file');
                $ruta = public_path() . '/upload';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($ruta, $fileName);

                $anuncios->imagen = $fileName;
            }
            $anuncios->save();
            return redirect('/add');
       
    }
    public function delete($idadd)
    {
        $anuncios = Anuncios::find($idadd);
        $anuncios->delete();
        return redirect('/add');
    }
    public function anuncios1()
    {
        $anuncio = Anuncios::all();
        return view('pagina.avisos',compact('anuncio'));
    }
    public function an()
    {
        $anuncio = Anuncios::all();
        $cont = 0;
        return view('pagina.avisosp',compact('anuncio',$cont++));
    }
    public function info($idadd)
    {
        $anuncios = Anuncios::find($idadd);
        return view('pagina.info',compact('anuncios'));
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina()
    {
        $banner = Banners::all();
        return view('pagina.inicio',compact('banner'));
    }
    public function index()
    {
        $banner = Banners::all();
        return view('banners.index',compact('banner'));
    }

    public function inicio()
    {
        $banner=Banners::all();
        return view('paypal.inicio',compact('banner'));
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
        $banner = Banners::all();
        return view('banners.create',compact('banner'))->with('uploadfiles', $uploadfiles);
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
            
    
            $banners = new Banners;
            $banners->imagen = $fileName;
            $banners->nombre = $request->nombre;
            $banners->info = $request->info;
            $banners->save();
            }
            return redirect('banners');
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
    public function edit($idb)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $banners = Banners::find($idb);
        return view('banners.edit', compact('banners'))->with('uploadfiles', $uploadfiles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idb)
    {
        $banners = Banners::find($idb);
            $banners->nombre = $request->nombre;
            $banners->imagen = $request->imagen;
            $banners->info = $request->info;

            if($request->hasFile('file')){
                $file = $request->file('file');
                $ruta = public_path() . '/upload';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($ruta, $fileName);

                $banners->imagen = $fileName;
            }
            $banners->save();
            return redirect('/banners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idb)
    {
        $banners = Banners::find($idb);
        $banners->delete();
        return redirect('/banners');
    }
}

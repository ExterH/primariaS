<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPals;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

class PayPalController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
    {
        $paypal = PayPals::all();
        return view('paypal.index',compact('paypal'));
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
        return view('paypal.create')->with('uploadfiles', $uploadfiles);
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

        $paypals = new PayPals;
        $paypals->imagen = $fileName;
        $paypals->descripcion = $request->descripcion;
        $paypals->precio = $request->precio;
        $paypals->producto = $request->producto;
        $paypals->save();
        return redirect('/PayPal')->with('alert', 'Guardado con exito');    
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
        ///
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idpp)
    {
        $uploadfiles =[];
        $filesInFolder = \File::files('upload');
        foreach($filesInFolder as $path) 
        {
            $uploadfiles[] =pathinfo($path);
        }
        $paypals = PayPals::find($idpp);
        return view('paypal.edit',compact('paypals'))->with('uploadfiles', $uploadfiles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpp)
    {
        $paypals = PayPals::find($idpp);
        $paypals->descripcion = $request->descripcion;
        $paypals->precio = $request->precio;
        $paypals->producto = $request->producto;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $ruta = public_path() . '/upload';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($ruta, $fileName);

            $paypals->imagen = $fileName;
        }
        $paypals->save();
        return redirect('/PayPal')->with('alert', 'Guardado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpp)
    {
        $paypals = PayPals::find($idpp);
        $paypals->delete();
        return redirect('/PayPal');
    }
}

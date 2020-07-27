<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Alumnos;
use App\Grados;

class AlumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = Alumnos::all();
        return view('alumnos.index', compact('alumno')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grado = Grados::all();
        return view('alumnos.create',compact('grado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnos = new Alumnos;
        $alumnos->matricula = $request->matricula;
        $alumnos->nombre = $request->nombre;
        $alumnos->apellidoP = $request->apellidoP;
        $alumnos->apellidoM = $request->apellidoM;
        $alumnos->grado = $request->grado;
        $alumnos->fecha = $request->fecha;
        $alumnos->tutor = $request->tutor;
        $alumnos->email = $request->email;
        $alumnos->telefono = $request->telefono;
        $alumnos->calle = $request->calle;
        $alumnos->colonia = $request->colonia;
        $alumnos->municipio = $request->municipio;
        $alumnos->biografia = $request->biografia;
        $alumnos->save();
        return redirect('/alumnos')->with('alert', 'Guardado con exito');

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
    public function edit($ida)
    {
        $grado = Grados::all();
        $alumnos = Alumnos::find($ida);
        return view('alumnos.edit',compact('alumnos','grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ida)
    {
        $alumnos = Alumnos::find($ida);
        $alumnos->matricula = $request->matricula;
        $alumnos->nombre = $request->nombre;
        $alumnos->apellidoP = $request->apellidoP;
        $alumnos->apellidoM = $request->apellidoM;
        $alumnos->fecha = $request->fecha;
        $alumnos->grado = $request->grado;
        $alumnos->tutor = $request->tutor;
        $alumnos->email = $request->email;
        $alumnos->telefono = $request->telefono;
        $alumnos->calle = $request->calle;
        $alumnos->colonia = $request->colonia;
        $alumnos->municipio = $request->municipio;
        $alumnos->biografia = $request->biografia;
        $alumnos->save();
        
        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ida)
    {
        $alumnos = Alumnos::find($ida);
        $alumnos->delete();
        return redirect('/alumnos');
    }
    public function init()
    {
        return view('menu');
    }
    public function detalle($ida)
    {
        $alumnos=Alumnos::find($ida);
        return view('alumnos.detalle',compact('alumnos'));
    }
}

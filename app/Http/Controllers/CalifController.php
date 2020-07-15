<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Módelos
use App\Alumnos;
use App\Calificaciones;

class CalifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Página principal del módulo de calificaciones
        $calif = Calificaciones::all();
        $alumno = Alumnos::all();
        return view('calif.index',compact('calif','alumno'));//5
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $ida)
    {
        // Función de muestra de calificaciones*****************
        // $grado = Grados::all();
        $alumnos = Alumnos::find($ida);
        return view('calif.show',compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $ida)
    {
        // Función de editar calificaciones
        $alumnos = Alumnos::find($ida);
        return view('calif.edit', compact('alumnos'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

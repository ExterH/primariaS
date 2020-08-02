<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\Grados;

class ReactAlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno = \DB::select(
            "SELECT a.matricula, 
            CONCAT(a.apellidoP,' ',a.apellidoM,' ',a.nombre)AS Alumno,
            CONCAT(a.grado,'°')AS grado
            FROM calificacion AS c
            INNER JOIN alumnos AS a ON a.ida=c.ida
            INNER JOIN profesor AS p ON p.idp=c.idp
            GROUP BY a.apellidoP, a.matricula,a.apellidoP,' ',a.apellidoM,' ',a.nombre, a.grado
            ORDER BY a.grado, a.apellidoP "
        );
        return response()->json($alumno, 200);
    }

    public function index1()
    {
        $alumnos = Grados::all();
        return response() -> json($alumnos, 200);
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
        $alumnos = Alumnos::create($request->all());
        return response()->json($alumnos, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() //$id
    {
        $alumnos = Alumnos::all();
        return response() -> json($alumnos, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $id)
    {
        $id -> update($request->all());
        return response()->json($id, 200);
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

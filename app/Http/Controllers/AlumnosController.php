<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
         $alumnos = alumnos::all();
         //dd($alumnos);
        return view('studentList')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $alumnoNueva = new Alumnos();
        $alumnoNueva->Cod = $request->inputCodigo3;
        $alumnoNueva->Name = $request->inputNombre3;
        $alumnoNueva->State = 1;

        $alumnoNueva->save();
        $alumnos = alumnos::all();
        return view('studentList')->with('alumnos', $alumnos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar($item){
        $alumnos = Alumnos::findOrFail($item);
        return view('editar')->with('alumnos', $alumnos);
    }
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
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $career =DB::table('career')
        ->select('*')
        ->where('State','=','1')
        ->paginate(3);
        return view('/career/careerList', ['career' => $career]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $careerNueva = new career();
        $careerNueva->Name = $request->inputNombre3;
        $careerNueva->State = 1;

        $careerNueva->save();
        //dd($alumnoNueva);
        return redirect('/career/careerList');
    }
    public function update(Request $request, $id){
        
        $fecha = date('Y-m-d G:i:s');
        DB::table('career')
            ->where('Id', $id)
            ->update(array( 'Name'   => $request->inputNombre3,
                                        'updated_at'=>$fecha));
        return redirect('/career/careerList');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar($item){
        $career = Career::findOrFail($item);
        return view('/career/editar')->with('career', $career);
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
    /*public function update(Request $request, $id)
    {
        $alumnosActualizada = Alumnos::find($id);
        $alumnosActualizada->Cod = $request->Codigo;
        $alumnosActualizada->Name = $request->Nombre;
        $alumnosActualizada->save();

        $alumnos = alumnos::all();
        return view('studentList')->with('alumnos', $alumnos);
    }*/

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

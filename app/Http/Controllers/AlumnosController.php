<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        $alumnos =DB::table('alumnos')
        ->select('*')
        ->where('State','=','1')
        ->paginate(5);
        return view('studentList', ['alumnos' => $alumnos]);
    }
    public function career()
    {
        $career = career::all();
        //dd($career);
        return view('student', ['career' => $career]);
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
        $alumnoNueva->Career = $request->inputCarrer3;
        $alumnoNueva->State = 1;

        $alumnoNueva->save();
        //dd($alumnoNueva);
        return redirect('studentList');
    }
    public function update(Request $request, $id){
        
        $fecha = date('Y-m-d G:i:s');
        DB::table('alumnos')
            ->where('Id', $id)
            ->update(array( 'Cod' => $request->inputCodigo3,
                                     'Name'   => $request->inputNombre3,
                                        'updated_at'=>$fecha));
        //$alumnos = alumnos::all()->paginate(2);
        //dd($alumnosActualizado);
        //return redirect('studentList')->with('alumnos', $alumnos);
        return redirect('studentList');
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

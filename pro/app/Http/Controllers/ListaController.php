<?php

namespace App\Http\Controllers;

use App\estudiantes; //modelo

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; 

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estudiante=estudiantes::all();
        //return $estudiante;
        return view('VistaEstudiantes', compact('estudiante'));
        /*$texto=trim($request->get ('texto'));
        $estudiante=DB::table('estudiantes')->select('Matricula','Nombre','Domicilio')
        ->where('Matricula','=',$texto)->paginate(10);
        return view ('VistaEstudiantes',compact('estudiante','texto'));*/
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
        $estudiante=estudiantes::whereId($id)->firstOrFail();
        return view('EditarEstudiante', compact('estudiante'));
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
        $estudiante=estudiantes::findOrFail($id);
        $estudiante->Matricula=$request->input('Matricula');
        $estudiante->Nombre=$request->input('Nombre');
        $estudiante->Domicilio=$request->input('Domicilio');
        $estudiante->save();
        return redirect()->route('Lista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante=estudiantes::find($id);
        $estudiante->delete();
        return redirect()->route('Lista.index');
    }
}

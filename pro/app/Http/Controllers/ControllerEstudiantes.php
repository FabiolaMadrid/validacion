<?php

namespace App\Http\Controllers;
use App\estudiantes;
use Illuminate\Http\Request;

class ControllerEstudiantes extends Controller
{
    public function mostrar()
    {
        return view ('AgregarEstudiantes');
    }
    public function store (Request $request)
    {
        $estudiantes=new estudiantes();
        $estudiantes->Matricula=$request->Matricula;
        $estudiantes->Nombre=$request->Nombre;
        $estudiantes->Domicilio=$request->Domicilio;
        $estudiantes->save();
        return redirect('estudiantes');
        /*return $request->all();*/
    }
}

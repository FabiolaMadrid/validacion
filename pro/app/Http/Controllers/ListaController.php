<?php

namespace App\Http\Controllers;

use App\estudiantes; //modelo

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //agregar

class ListaController extends Controller
{
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $estudiante=DB::table ('estudiantes')->select('Maricula', 'Nombre', 'Domiclio')->where('matricula', '=',$texto)->paginate(10);
        return view('VistaEstudiantes', compact('estudiante', $texto));
    }
}

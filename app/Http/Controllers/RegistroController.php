<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registro;


class RegistroController extends Controller
{
    public function registro(Request $request){
        $registro= new Registro();
        $registro->Nombre=$request->nombre;
        $registro->Entidad=$request->entidad;
        $registro->Telefono=intval($request->telefono);
        $registro->Correo=$request->email;
        $registro->Especialidad=$request->especialidad;
        $registro->Experiencia_Publico_Privado=$request->experienciaPublico;
        $registro->Experiencia_Extranjero=$request->experienciaExtranjero;
        $registro->Evidencia_Clinica=$request->publicaciones;
        $registro->Donde_Opera=$request->dondeOpera;
        $registro->Cargo_Publico_Privado=$request->cargoPublicoPrivado;
        $registro->save();

        return redirect()->route('welcome',compact('registro'));

    }
}

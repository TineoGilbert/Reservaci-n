<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ReservacionController extends Controller
{
    public function create(){
        return view('reservacion');
    }

    public function store(Request $request)
    {
      $reservacion = $request->all();
     // session()->flash('Exito', 'Reservación Creada Con Exito');

     $request->validate([
         'mesas' => ['required','unique:reservaciones,Mesa']
     ],
    [
      'required' => 'El nombre es Requerido.',
      'unique' => 'Lo sentimos, esta Mesa no está Disponible.'
    ]);
/*
     $data = DB::table('reservaciones')->where('Mesa', '1A')->count();

     if($data > 0){
       echo("<script>alert('Lo siento, La Mesa ya está registrada')</script>");
       return view('reservacion');
     }
     else{
      Reservacion::create([
        'Nombre' =>$request->nombre,
        'Apellido' =>$request->apellido,
        'Email' =>$request->mail,
        'Fecha' =>$request->fecha,
        'Hora' =>$request->hora,
        'Personas' =>$request->personas,
        'Mesa' =>$request->mesas,
        'Celular' =>$request->cel
    ]);
     }
*/
      //dd($reservacion);
    
      Reservacion::create([
        'Nombre' =>$request->nombre,
        'Apellido' =>$request->apellido,
        'Email' =>$request->mail,
        'Fecha' =>$request->fecha,
        'Hora' =>$request->hora,
        'Personas' =>$request->personas,
        'Mesa' =>$request->mesas,
        'Celular' =>$request->cel
    ]);


  
    
    
      $informacion = Reservacion::select('Nombre','Email','Fecha','Hora', 'Celular')->orderBy('id','desc')->first();
        
     return view('confirmación', compact('informacion'));

     $verificar = Reservacion::where('Mesa', '=', input::get('Mesa'))->get();
    }
      


    public function show()
    {
        $informacion = Reservacion::select('Nombre','Email')->orderBy('id','desc')->first();
        return view('confirmación',compact('informacion'));
    }

    public function Principal(){
        return view('Principal');
    }
}

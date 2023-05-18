<?php

namespace App\Http\Controllers;

use App\periodicidad;
use Illuminate\Http\Request;

class catalogoperiodicidad extends Controller
{

    protected $messages = [
   'nombre.required'=> 'Este campo es obligatorio.',
   'nombre.regex'=>'Solo puede ingresar letras y numeros en este campo.',
   'nombre.max'=> 'Solo tiene un limite de 50 letras'
        ];


    public function store(Request $request)
    {
    request()->validate([
        'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
       ], $this->messages);

        $periodicidad = new periodicidad();
        $periodicidad -> nombre = $request -> nombre;

        $periodicidad -> save();


        return redirect("catalogoperiodicidad")->with('guardado', 'datos guardados exitosamente');
    }
    public function deleteperiocidad($id){

          $periodicidad = periodicidad::find($id);
          $nombreejes = $periodicidad->nombre;
          $periodicidad->delete();


          return redirect('catalogoperiodicidad')->with('Fue eliminado Correctamente.');
    }



    public function modificarperiocidad(Request $request, $id){
      request()->validate([
          'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
         ], $this->messages);

      $periodicidad = periodicidad:: findOrFail($id);

      $periodicidad->nombre = $request->nombre;
      $periodicidad->save();


      return redirect('catalogoperiodicidad')->with('actualizo','Datos de la periocidad Actualizados Correctamente');
    }

    public function create()
    {

      return view('catalogoperiodicidad',[

      'periodicidad'=>periodicidad::pluck('nombre','id')
    ]);

    }
    public function edit(catalogoperiodicidad $catalogoperiodicidad)
    {

      return view('catalogoperiodicidad',[

      'periodicidad'=>periodicidad::pluck('nombre','id')
    ]);

    }
    }

<?php

namespace App\Http\Controllers;

use App\tipo_indicador;
use Illuminate\Http\Request;

class catalogotipo_indicador extends Controller
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

        $tipo_indicador = new tipo_indicador();
        $tipo_indicador -> nombre = $request -> nombre;

        $tipo_indicador -> save();


        return redirect("catalogotipo_indicador")->with('guardado', 'datos guardados exitosamente');
    }
    public function deletetipoindicador($id){

          $tipo_indicador = tipo_indicador::find($id);
          $nombreChildre = $tipo_indicador->nombre;
          $tipo_indicador->delete();


          return redirect('catalogotipo_indicador')->with('msjdelete', 'Fue eliminado Correctamente.');
    }



    public function modificartipoindicador(Request $request, $id){
      request()->validate([
          'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
         ], $this->messages);

      $tipo_indicador = tipo_indicador:: findOrFail($id);

      $tipo_indicador->nombre = $request->nombre;
      $tipo_indicador->save();


      return redirect('catalogotipo_indicador')->with('guardado','Datos de la Secretaria Actualizados Correctamente');
    }

    public function indextipoindicador()
        {
            $tipo_indicador =  tipo_indicador::get();
            return $tipo_indicador;
        }
        public function create()
        {

          return view('catalogotipo_indicador',[

          'tipo_indicador'=>tipo_indicador::pluck('nombre','id')
        ]);

        }
        public function edit(catalogotipo_indicador $catalogotipo_indicador)
        {

          return view('catalogotipo_indicador',[

          'tipo_indicador'=>tipo_indicador::pluck('nombre','id')
        ]);

    }
  }

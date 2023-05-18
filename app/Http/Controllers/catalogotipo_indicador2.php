<?php

namespace App\Http\Controllers;

use App\tipo_indicador2;
use Illuminate\Http\Request;

class catalogotipo_indicador2 extends Controller
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

        $tipo_indicador2 = new tipo_indicador2();
        $tipo_indicador2 -> nombre = $request -> nombre;

        $tipo_indicador2 -> save();


        return redirect("catalogotipo_indicador2")->with('guardado', 'datos guardados exitosamente');
    }
    public function deletetipoindicador2($id){

          $tipo_indicador2 = tipo_indicador2::find($id);
          $nombreChildre = $tipo_indicador2->nombre;
          $tipo_indicador2->delete();


          return redirect('catalogotipo_indicador2')->with('msjdelete', 'Fue eliminado Correctamente.');
    }



    public function modificartipoindicador2(Request $request, $id){
      request()->validate([
          'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
         ], $this->messages);

      $tipo_indicador2 = tipo_indicador2:: findOrFail($id);

      $tipo_indicador2->nombre = $request->nombre;
      $tipo_indicador2->save();


      return redirect('catalogotipo_indicador2')->with('guardado','Datos de la Secretaria Actualizados Correctamente');
    }

    public function indextipoindicador2()
        {
            $tipo_indicador2 =  tipo_indicador2::get();
            return $tipo_indicador2;
        }
        public function create()
        {

          return view('catalogotipo_indicador2',[

          'tipo_indicador2'=>tipo_indicador2::pluck('nombre','id')
        ]);

        }
        public function edit(catalogotipo_indicador2 $catalogotipo_indicador2)
        {

          return view('catalogotipo_indicador2',[

          'tipo_indicador2'=>tipo_indicador2::pluck('nombre','id')
        ]);

    }
  }

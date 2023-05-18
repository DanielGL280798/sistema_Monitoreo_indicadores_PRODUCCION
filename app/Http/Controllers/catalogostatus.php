<?php

namespace App\Http\Controllers;

use App\status;
use Illuminate\Http\Request;
use App\Http\Controllers\catalogodirecciones;


class catalogostatus extends Controller
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

      $status = new status();
      $status -> nombre = $request -> nombre;

      $status -> save();


      return redirect("catalogostatus")->with('guardado', 'datos guardados exitosamente');
  }
  public function indexstatus()
      {
          $status =  status::get();
          return $status;
      }
      public function deletestat($id){

            $status = status::find($id);
            $nombreejes = $status->nombre;
            $status->delete();


            return redirect('catalogostatus')->with('Fue eliminado Correctamente.');
      }
      public function updatestatus(Request $request, $id){
        request()->validate([
            'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
           ], $this->messages);
          $status = status:: findOrFail($id);

          $status->nombre     = $request->nombre;
          $status->update();


          return redirect('catalogostatus')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
       }
      public function create()
      {

        return view('catalogostatus',[

        'status'=>status::pluck('nombre','id')
      ]);

      }
      public function edit(catalogostatus $catalogostatus)
      {

        return view('catalogostatus',[

        'status'=>status::pluck('nombre','id')
      ]);  }



    }

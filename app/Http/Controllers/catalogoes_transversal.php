<?php

namespace App\Http\Controllers;

use App\es_transversal;
use Illuminate\Http\Request;

class catalogoes_transversal extends Controller
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

        $es_transversal = new es_transversal();
        $es_transversal -> nombre = $request -> nombre;

        $es_transversal -> save();


        return redirect("catalogoes_transversal")->with('guardado', 'datos guardados exitosamente');
    }
    public function deletestransversal($id){

          $es_transversal = es_transversal::find($id);
          $nombreChildre = $es_transversal->nombre;
          $es_transversal->delete();


        return redirect('catalogoes_transversal')->with( 'Fue eliminado Correctamente.');
    }



    public function modificartransversal(Request $request, $id){
      request()->validate([
          'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
         ], $this->messages);
      $es_transversal = es_transversal:: findOrFail($id);

      $es_transversal->nombre     = $request->nombre;
      $es_transversal->save();


      return redirect('catalogoes_transversal')->with('actualizo','Datos de las Lineas de accion Actualizados Correctamente');
    }
    public function indexes_transversal()
        {
            $es_transversal =  es_transversal::get();
            return $es_transversal;
        }
        public function create()
        {

          return view('catalogoes_transversal',[

          'es_transversal'=>es_transversal::pluck('nombre','id')
        ]);

        }
        public function edit(catalogoes_transversal $catalogoes_transversal)
        {

          return view('catalogoes_transversal',[

          'es_transversal'=>es_transversal::pluck('nombre','id')
        ]);

    }
    }

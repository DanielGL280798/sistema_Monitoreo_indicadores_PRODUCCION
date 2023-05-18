<?php

namespace App\Http\Controllers;

use App\estrategias;
use Illuminate\Http\Request;

class catalogoestrategias extends Controller
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

        $estrategias = new estrategias();
        $estrategias -> nombre = $request -> nombre;

        $estrategias -> save();


        return redirect("catalogoestrategias")->with('guardado', 'datos guardados exitosamente');
    }
    public function deleteestrategias($id){

          $estrategias = estrategias::find($id);
          $nombreChildre = $estrategias->nombre;
          $estrategias->delete();


        return redirect('catalogoestrategias')->with( 'Fue eliminado Correctamente.');
  }



  public function modificarestrategia(Request $request, $id){
    request()->validate([
        'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
       ], $this->messages);
      $estrategias = estrategias:: findOrFail($id);

      $estrategias->nombre     = $request->nombre;
      $estrategias->save();


      return redirect('catalogoestrategias')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
   }
    public function indexestrategias()
        {
            $estrategias =  estrategias::get();
            return $estrategias;
        }
        public function create()
        {

          return view('catalogoestrategias',[

          'estrategias'=>estrategias::pluck('nombre','id')
        ]);

        }
        public function edit(catalogoestrategias $catalogoestrategias)
        {

          return view('catalogoestrategias',[

          'estrategias'=>estrategias::pluck('nombre','id')
        ]);

  }
  }

<?php

namespace App\Http\Controllers;

use App\indicador;
use Illuminate\Http\Request;

use App\Http\Controllers\catalogoindicador;
class catalogoindicador extends Controller
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

        $indicador = new indicador();
        $indicador -> nombre = $request -> nombre;

        $indicador -> save();


        return redirect("catalogoindicador")->with('guardado', 'datos guardados exitosamente');
    }
    public function deleteindicador($id){

          $indicador = indicador::find($id);
          $nombreChildre = $indicador->nombre;
          $indicador->delete();


        return redirect('catalogoindicador')->with('Fue eliminado Correctamente.');
  }



  public function modificarindicador(Request $request, $id){
    request()->validate([
        'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
       ], $this->messages);
      $indicador = indicador:: findOrFail($id);

      $indicador->nombre     = $request->nombre;
      $indicador->save();


      return redirect('catalogoindicador')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
   }
    public function indexindicador()
        {
            $indicador =  indicador::get();
            return $indicador;
        }
        public function create()
        {

          return view('catalogoindicador',[

          'indicador'=>indicador::pluck('nombre','id')
        ]);

        }
        public function edit(catalogoindicador $catalogoindicador)
        {

          return view('catalogoindicador',[

          'indicador'=>indicador::pluck('nombre','id')
        ]);

  }}

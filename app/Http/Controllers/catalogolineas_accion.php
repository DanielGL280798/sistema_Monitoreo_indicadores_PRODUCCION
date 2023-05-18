<?php

namespace App\Http\Controllers;

use App\lineas_accion;
use Illuminate\Http\Request;

class catalogolineas_accion extends Controller
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

        $lineas_accion = new lineas_accion();
        $lineas_accion -> nombre = $request -> nombre;

        $lineas_accion -> save();


        return redirect("catalogolineas_accion")->with('guardado', 'datos guardados exitosamente');
    }
    public function deletelineas($id){

          $lineas_accion = lineas_accion::find($id);
          $nombreChildre = $lineas_accion->nombre;
          $lineas_accion->delete();


        return redirect('catalogolineas_accion')->with( 'Fue eliminado Correctamente.');
  }



  public function modificarlineas(Request $request, $id){
    request()->validate([
        'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
       ], $this->messages);
      $lineas_accion = lineas_accion:: findOrFail($id);

      $lineas_accion->nombre     = $request->nombre;
      $lineas_accion->save();


      return redirect('catalogolineas_accion')->with('actualizo','Datos de las Lineas de accion Actualizados Correctamente');
   }
    public function indexlineas()
        {
            $lineas_accion =  lineas_accion::get();
            return $lineas_accion;
        }
        public function create()
        {

          return view('catalogolineas_accion',[

          'lineas_accion'=>lineas_accion::pluck('nombre','id')
        ]);

        }
        public function edit(catalogolineas_accion $catalogolineas_accion)
        {

          return view('catalogolineas_accion',[

          'lineas_accion'=>lineas_accion::pluck('nombre','id')
        ]);

  }
  }

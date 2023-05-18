<?php

namespace App\Http\Controllers;

use App\ejes;
use Illuminate\Http\Request;
use App\Http\Controllers\catalogoejes;

class catalogoejes extends Controller
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

      $ejes = new ejes();
      $ejes -> nombre = $request -> get('nombre');

      $ejes -> save();


      return redirect("catalogoejes")->with('guardado', 'datos guardados exitosamente');
  }

public function deleteeje($id){

      $ejes = ejes::find($id);
      $nombreejes = $ejes->nombre;
      $ejes->delete();


      return redirect('catalogoejes')->with('Fue eliminado Correctamente.');
}



public function modificareje(Request $request, $id){
  request()->validate([
      'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
     ], $this->messages);
  $ejes = ejes:: findOrFail($id);

  $ejes->nombre = $request->nombre;
  $ejes->save();


  return redirect('catalogoejes')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
}

public function indexejes()
    {
        $ejes =  ejes::get();
        return $ejes;
    }
    public function create()
    {

      return view('catalogoejes',[

      'ejes'=>ejes::pluck('nombre','id')
    ]);

    }
    public function edit(catalogoejes $catalogoejes)
    {

      return view('catalogoejes',[

      'ejes'=>ejes::pluck('nombre','id')
    ]);  }



}

<?php

namespace App\Http\Controllers;

use App\secretarias;
use App\direcciones;
use Illuminate\Http\Request;
use App\Http\Controllers\catalogodirecciones;


class catalogosecretarias extends Controller
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

      $secretarias = new secretarias();
      $secretarias -> nombre = $request -> get('nombre');

      $secretarias -> save();

      return redirect("catalogosecretarias")->with('guardado', 'datos guardados exitosamente');
  }

  public function deleteChil($id){

        $secretarias = secretarias::find($id);
        $nombreChildre = $secretarias->nombre;
        $secretarias->delete();


      return redirect('catalogosecretarias')->with('Fue eliminado Correctamente.');
}



public function updateChildren(Request $request, $id){
  request()->validate([
      'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
     ], $this->messages);
    $secretarias = secretarias:: findOrFail($id);

    $secretarias->nombre     = $request->nombre;
    $secretarias->update();


    return redirect('catalogosecretarias')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
 }
  public function indexsecretarias()
      {
          $secretarias =  secretarias::get();
          return $secretarias;
      }
      public function create()
      {

        return view('catalogosecretarias',[

        'secretarias'=>secretarias::pluck('nombre','id')
      ]);

      }
      public function edit(catalogosecretarias $catalogosecretarias)
      {

        return view('catalogosecretarias',[

        'secretarias'=>secretarias::pluck('nombre','id')
      ]);

}
public function getSecretaria(Request $request)
  {
      if ($request->ajax()) {
          $secretariaID = direcciones::where('id', $request->secretaria)->get();
          $secretarias = [secretarias::select('id', 'nombre')->where('id', $secretariaID[0]['fk_secretarias_id'])->get(),direcciones::pluck('direccion','id')];



          foreach ($secretarias as $secretaria) {
              // code...
              $secretariasArray[$secretaria->id] = $secretaria->nombre;
          }
      }
      return response()->json($secretariasArray);
  }
}

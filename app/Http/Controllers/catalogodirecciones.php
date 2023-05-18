<?php

namespace App\Http\Controllers;

use App\direcciones;
use App\secretarias;
use DB;
use App\Http\Controllers\catalogosecretarias;
use Illuminate\Http\Request;
use Illuminate\pagination\paginator;
use Illuminate\pagination\LengthAwarePaginator;

class catalogodirecciones extends Controller
{
  protected $messages = [
 'direcciones.required'=> 'Este campo es obligatorio.',
 'direcciones.max'=> 'Solo tiene un limite de 50 letras',
 'direcciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
 'fk_secretarias_id.required' => 'Este campo es obligatorio',
 'fk_secretarias_id.exists' => 'El registro seleccionado no es valido',

      ];



  public function store(Request $request)
  {

  request()->validate([
    'direcciones'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
    'fk_secretarias_id'=>'required|exists:secretarias,id',
     ], $this->messages);
      $direcciones = new direcciones();
      $direcciones -> fk_secretarias_id = $request -> fk_secretarias_id;
      $direcciones -> direcciones = $request -> direcciones;
      $direcciones -> save();


      return redirect("catalogodirecciones")->with('guardado', 'datos guardados exitosamente');

  }
  public function deletedireciones($id){

        $direcciones = direcciones::find($id)->paginate(5);
        $direcciones->delete();


        return redirect('catalogodirecciones')->with('Fue eliminado Correctamente.');
  }



  public function updatedire(Request $request, $id){
    request()->validate([
        'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
        'fk_secretarias_id'=>'required|exists:secretarias,id',
       ], $this->messages);
    $direcciones = direcciones:: findOrFail($id);

    $direcciones->direcciones = $request->direcciones;
    $direcciones->save();


    return redirect('catalogodirecciones')->with('actualizo','Datos de la Secretaria Actualizados Correctamente');
  }

  public function create()
  {

    $direcciones = DB::TABLE('direcciones')
    ->leftJoin ('secretarias','direcciones.fk_secretarias_id','=','secretarias.id')
    ->select ('secretarias.nombre as secretarias','direcciones','direcciones.id')
    -> orderBy('id','ASC')
    ->simplePaginate(10)
     ;
     return view('catalogodirecciones',[
    'direcciones'=>$direcciones,
    'secretaria'=>secretarias::pluck('nombre','id'),
      ]);

  }
  public function edit(catalogodirecciones $catalogodirecciones)
  {


          $direcciones = DB::TABLE('direcciones')
        ->leftJoin ('secretarias','direcciones.fk_secretarias_id','=','secretarias.id')
        ->select ('secretarias.nombre as secretarias','direcciones','direcciones.id')

           ->get();
           return view('catalogodirecciones',[
          'direcciones'=>$direcciones,
          'secretaria'=>secretarias::pluck('nombre','id'),
            ]);


  }

  }

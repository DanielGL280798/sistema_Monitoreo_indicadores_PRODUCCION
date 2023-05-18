<?php

namespace App\Http\Controllers;
use App\avance2;
use App\status;
use App\Role;
use App\periodicidad;
use App\User;
use App\monitoreo;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class cargaavance2 extends Controller
{
  protected $messages = [
  'meta.required'=> 'Este campo es obligatorio.',
  'meta.max'=> 'Solo tiene un limite de 50 letras',
  'meta.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'evidencia.required'=> 'Este campo es obligatorio.',
  'fk_nom_id.required'=> 'Este campo es obligatorio.',
  'fk_nom_id.exists' => 'El registro seleccionado no es valido',



  'Logros_beneficio.required'=> 'Este campo es obligatorio.',
  'Logros_beneficio.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'acciones.required'=> 'Este campo es obligatorio.',
  'acciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'acciones.max'=> 'Solo tiene un limite de 950 letras',
  'acciones_realizar.required'=> 'Este campo es obligatorio.',
  'acciones_realizar.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'acciones_realizar.max'=> 'Solo tiene un limite de 950 letras',
  'observaciones.required'=> 'Este campo es obligatorio.',
  'observaciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'observaciones.max'=> 'Solo tiene un limite de 950 letras',
      ];


  public function store(Request $request)
  {

  request()->validate([
      'fk_nom_id' =>'required|exists:monitoreo_indicadores,id',
      'meta'=> 'required|max:50',

      'evidencia'=>'required',

      'Logros_beneficio'=> 'required|max:950',
      'acciones'=> 'required|max:950',
      'acciones_realizar'=> 'required|max:950',
      'observaciones'=> 'required|max:950'
     ], $this->messages);

     $name = $request-> meta;
     if(!empty($request->evidencia)){
     $path = $request->file('evidencia')->storeAs('evidencia','evidencia'.'_'.$name.'.'.$request->file('evidencia')->extension());
    $request->file =$path;

      $avance2 = new avance2();
      $avance2 -> meta = $request -> meta;
      $avance2 -> evidencia = $path;
      $avance2 -> fk_nom_id = $request -> fk_nom_id;

      $avance2 -> porcentaje_avance = $request -> porcentaje_avance;
      $avance2 -> Logros_beneficio = $request -> Logros_beneficio;
      $avance2 -> acciones = $request -> acciones;
      $avance2 -> acciones_realizar = $request -> acciones_realizar;
      $avance2 -> observaciones  = $request ->observaciones;
      $avance2 -> fk_users_id  = $request ->fk_users_id;

      // dd($avance2);


      $avance2 -> save();


      return redirect("cargaavance2")->with('guardado', 'datos guardados exitosamente');
    }else{
      $path =null;
      $avance2 = new avance2();
      $avance2 -> meta = $request -> meta;
      $avance2 -> evidencia =$path;
      $avance2 -> fk_nom_id = $request -> fk_nom_id;

      $avance2 -> porcentaje_avance = $request -> porcentaje_avance;
      $avance2 -> Logros_beneficio = $request -> Logros_beneficio;
      $avance2 -> acciones = $request -> acciones;
      $avance2 -> acciones_realizar = $request -> acciones_realizar;
      $avance2 -> observaciones  = $request ->observaciones;
      $avance2 -> fk_users_id  = $request ->fk_users_id;

    // dd($avance2);
      $avance2 -> save();


      return redirect("cargaavance2")->with('guardado', 'datos guardados exitosamente');

    }
  }


  public function create()
  {
    $monitoreo_indicadores = DB::TABLE('monitoreo_indicadores')

    ->select (
      'monitoreo_indicadores.nom_indicador',
      'monitoreo_indicadores.metas',

       'monitoreo_indicadores.id')
       ->get();
    return view('cargaavance2',[
      'monitoreo_indicadores'=>$monitoreo_indicadores,

    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),
    'periodicidad'=>periodicidad::pluck('nombre','id'),
    'status'=>status::pluck('nombre','id'),
  ]);

  }
  public function edit(cargaavance2 $cargaavance2)
  {

    return view('catalogodirecciones',[
    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),
    'periodicidad'=>periodicidad::pluck('nombre','id'),
    'status'=>status::pluck('nombre','id'),
  ]);

  }
}

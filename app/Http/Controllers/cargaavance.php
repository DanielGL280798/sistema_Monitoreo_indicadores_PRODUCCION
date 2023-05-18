<?php

namespace App\Http\Controllers;
use App\avance;
use App\status;
use App\Role;
use App\periodicidad;
use App\User;
use App\monitoreo;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class cargaavance extends Controller
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

      $avance = new avance();
      $avance -> meta = $request -> meta;
      $avance -> evidencia = $path;
      $avance -> fk_nom_id = $request -> fk_nom_id;

      $avance -> porcentaje_avance = $request -> porcentaje_avance;
      $avance -> Logros_beneficio = $request -> Logros_beneficio;
      $avance -> acciones = $request -> acciones;
      $avance -> acciones_realizar = $request -> acciones_realizar;
      $avance -> observaciones  = $request ->observaciones;
      $avance -> fk_users_id  = $request ->fk_users_id;

      // dd($avance);


      $avance -> save();


      return redirect("cargaavance")->with('guardado', 'datos guardados exitosamente');
    }else{
      $path =null;
      $avance = new avance();
      $avance -> meta = $request -> meta;
      $avance -> evidencia =$path;
      $avance -> fk_nom_id = $request -> fk_nom_id;

      $avance -> porcentaje_avance = $request -> porcentaje_avance;
      $avance -> Logros_beneficio = $request -> Logros_beneficio;
      $avance -> acciones = $request -> acciones;
      $avance -> acciones_realizar = $request -> acciones_realizar;
      $avance -> observaciones  = $request ->observaciones;
      $avance -> fk_users_id  = $request ->fk_users_id;

    // dd($avance);
      $avance -> save();


      return redirect("cargaavance")->with('guardado', 'datos guardados exitosamente');

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
    return view('cargaavance',[
      'monitoreo_indicadores'=>$monitoreo_indicadores,

    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),
    'periodicidad'=>periodicidad::pluck('nombre','id'),
    'status'=>status::pluck('nombre','id'),
  ]);

  }
  public function edit(cargaavance $cargaavance)
  {

    return view('catalogodirecciones',[
    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),
    'periodicidad'=>periodicidad::pluck('nombre','id'),
    'status'=>status::pluck('nombre','id'),
  ]);

  }
}

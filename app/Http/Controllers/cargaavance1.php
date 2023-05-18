<?php

namespace App\Http\Controllers;
use App\avance1;
use App\status;
use App\Role;
use App\User;
use App\monitoreo;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class cargaavance1 extends Controller
{



  public function store(Request $request)
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

      $avance1 = new avance1();
      $avance1 -> meta = $request -> meta;
      $avance1 -> evidencia = $path;
      $avance1 -> fk_nom_id = $request -> fk_nom_id;

      $avance1 -> porcentaje_avance = $request -> porcentaje_avance;
      $avance1 -> Logros_beneficio = $request -> Logros_beneficio;
      $avance1 -> acciones = $request -> acciones;
      $avance1 -> acciones_realizar = $request -> acciones_realizar;
      $avance1 -> observaciones  = $request ->observaciones;
      $avance1 -> fk_users_id  = $request ->fk_users_id;

      // dd($avance1);


      $avance1 -> save();


      return redirect("cargaavance1")->with('guardado', 'datos guardados exitosamente');
    }else{
      $path =null;
      $avance1 = new avance1();
      $avance1 -> meta = $request -> meta;
      $avance1 -> evidencia =$path;
      $avance1 -> fk_nom_id = $request -> fk_nom_id;
      $avance1 -> porcentaje_avance = $request -> porcentaje_avance;
      $avance1 -> Logros_beneficio = $request -> Logros_beneficio;
      $avance1 -> acciones = $request -> acciones;
      $avance1 -> acciones_realizar = $request -> acciones_realizar;
      $avance1 -> observaciones  = $request ->observaciones;
      $avance1 -> fk_users_id  = $request ->fk_users_id;

    // dd($avance1);
      $avance1 -> save();


      return redirect("cargaavance1")->with('guardado', 'datos guardados exitosamente');

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
    return view('cargaavance1',[
      'monitoreo_indicadores'=>$monitoreo_indicadores,

    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),

    'status'=>status::pluck('nombre','id'),
  ]);

  }
  public function edit(cargaavance1 $cargaavance1)
  {

    return view('catalogodirecciones',[
    'monitoreo'=>monitoreo::pluck('nom_indicador','id'),

    'status'=>status::pluck('nombre','id'),
  ]);

  }
}

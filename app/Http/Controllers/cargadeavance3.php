<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\status;
use App\avance3;

use App\cargaavance;
use App\monitoreo;
use App\User;

use Illuminate\pagination\paginator;
use Illuminate\pagination\LengthAwarePaginator;

use Illuminate\Support\Facades\Storage;


class cargadeavance3 extends Controller
{

  protected $messages = [
  'meta.required'=> 'Este campo es obligatorio.',
  'meta.max'=> 'Solo tiene un limite de 50 letras',
  'meta.regex'=>'Solo puede ingresar letras y numeros en este campo.',

  'fk_nom_id.required'=> 'Este campo es obligatorio.',
  'fk_nom_id.exists' => 'El registro seleccionado no es valido',
  'fk_status_id.required'=> 'Este campo es obligatorio.',
  'fk_status_id.exists' => 'El registro seleccionado no es valido',
  'observaciones_status.required'=> 'Este campo es obligatorio.',
  'observaciones_status.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'observaciones.required'=> 'Este campo es obligatorio.',
  'observaciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'acciones.required'=> 'Este campo es obligatorio.',
  'acciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'periodo.required'=> 'Este campo es obligatorio.',
  'periodo.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'observaciones.required'=> 'Este campo es obligatorio.',
  'observaciones.regex'=>'Solo puede ingresar letras y numeros en este campo.',
  'observaciones.max'=> 'Solo tiene un limite de 250 letras'
      ];


public function updatecarga(Request $request, $id){
$idUser = $request->get('fk_users_id');

  if(!empty($request->file)){
  $path = $request->file('file')->store('evidencia');

   $avance=avance3::where("id",$id)->first();

    $avance -> meta = $request -> meta;
   $avance -> evidencia = $path;
   $avance -> fk_nom_id = $request -> fk_nom_id;

   $avance -> porcentaje_avance = $request -> porcentaje_avance;
   $avance -> Logros_beneficio = $request -> Logros_beneficio;
   $avance -> acciones = $request -> acciones;
   $avance -> acciones_realizar = $request -> acciones_realizar;
   $avance -> observaciones  = $request ->observaciones;

   $avance -> save();


   return redirect("cargadeavance3?fk_users_id=$idUser")->with('actualizo', 'datos ');
  }else{
   $path =null;

   $avance=avance3::where("id",$id)->first();
   $avance -> meta = $request -> meta;

   $avance -> fk_nom_id = $request -> fk_nom_id;

   $avance -> porcentaje_avance = $request -> porcentaje_avance;
   $avance -> Logros_beneficio = $request -> Logros_beneficio;
   $avance -> acciones = $request -> acciones;
   $avance -> acciones_realizar = $request -> acciones_realizar;
   $avance -> observaciones  = $request ->observaciones;

   $avance->save();
  return redirect("cargadeavance3?fk_users_id=$idUser")->with('actualizo');

}
}
public function create()
{

  $carga_avance = DB::TABLE('carga_avance3')
  ->leftJoin('monitoreo_indicadores','carga_avance3.fk_nom_id','=','monitoreo_indicadores.id')


  ->select (
    'monitoreo_indicadores.nom_indicador',
    'monitoreo_indicadores.metas',
     'carga_avance3.meta',

     'evidencia',

     'porcentaje_avance',
     'Logros_beneficio',
     'acciones',
     'acciones_realizar',
     'observaciones',
     'carga_avance3.id')



          -> orderBy('id','DESC')
           ->simplePaginate(10)
          ;



  return view('cargadeavance3',[
  'carga_avance'=>$carga_avance,


  'monitoreo'=>monitoreo::pluck('nom_indicador','id')
  ]);
}
public function deleteavance($id){

      $avance = avance3::find($id);
      $avance->delete();

      $Avance = DB::TABLE('carga_avance3')
->leftJoin ('users','carga_avance3.fk_users_id','=','users.id')

      ->select (
         'carga_avance3.fk_users_id',
         'carga_avance3.id')
          ->where ('carga_avance3.id','=',$id)

->get();

      return redirect("inicio2")->with('Fue eliminado Correctamente.');

}

public function edit(cargadeavance3 $cargadeavance3,Request $request)
{
  $permisos = DB::TABLE('permiso')

      ->select (

        'fk_autorizacion_id',
        'nombre_boton',
        'permiso.id')
        ->where('permiso.id', '=', 5)
      ->first();

  $nombre = $request->get('buscarpor');
  $idUser = $request->get('fk_users_id');
  //dd($idUser);
  $carga_avance = DB::TABLE('carga_avance3')
  ->leftJoin('monitoreo_indicadores','carga_avance3.fk_nom_id','=','monitoreo_indicadores.id')

  ->leftJoin ('users','carga_avance3.fk_users_id','=','users.id')
  ->select (
    'monitoreo_indicadores.nom_indicador',
    'monitoreo_indicadores.metas',
     'carga_avance3.meta',
     'evidencia',

     'porcentaje_avance',
     'Logros_beneficio',
     'acciones',
     'acciones_realizar',
     'observaciones',
     'carga_avance3.fk_users_id',
     'carga_avance3.id',
     )

->where('users.id', '=', $idUser)
//->where('monitoreo_indicadores.nom_indicador','like',"%$nombre%")
//->orWhere('carga_avance3.meta', 'like',"%$nombre%")

     -> orderBy('id','DESC')
      ->simplePaginate(10)
     ;

  return view('cargadeavance3',[
  'carga_avance'=>$carga_avance,
   'permisos'=>$permisos,
  'monitoreo'=>monitoreo::pluck('nom_indicador','id')


]);

}
public function index(Request $request)
    {

        $nombre = $request->get('buscarpor');

        $monitoreocon = monitoreo::
        where('fk_nom_id',"%$nombre%")
        ->orWhere('meta', "%$nonbre%")
        ->orWhere('periodo', "%$nmbre%")
        ->paginate(5);

        return view('monitoreo.index', compact('monitoreocon'));
    }


}

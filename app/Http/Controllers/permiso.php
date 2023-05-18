<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\autorizacion;
use App\permisomodal;
use Illuminate\pagination\paginator;
use Illuminate\pagination\LengthAwarePaginator;

use Illuminate\Support\Facades\Storage;

class permiso extends Controller
{
  public function create()
  {

    $permiso= DB::TABLE('permiso')
  ->leftJoin ('autorizacion','permiso.fk_autorizacion_id','=','autorizacion.id')
    ->select (
      'autorizacion.nombre',
'fk_autorizacion_id',
      'nombre_boton',
      'permiso.id')
      -> orderBy('id')
       ->simplePaginate(10);


      return view('permiso',[
        'autorizacion'=>autorizacion::pluck('nombre','id'),
      'permiso'=>$permiso,


    ]);
}
  public function edit(permiso $permiso)
  {

    $permiso= DB::TABLE('permiso')
->leftJoin ('autorizacion','permiso.fk_autorizacion_id','=','autorizacion.id')
    ->select (
      'autorizacion.nombre',
      'fk_autorizacion_id',
      'nombre_boton',
      'permiso.id')
      -> orderBy('id')
       ->simplePaginate(10);

      return view('permiso',[
        'autorizacion'=>autorizacion::pluck('nombre','id'),
      'permiso'=>$permiso,


    ]);
  }
  public function updateper(Request $request, $id){
       $permiso=permisomodal::where("id",$id)->first();

      $permiso -> fk_autorizacion_id = $request -> fk_autorizacion_id;


     $permiso -> save();


     return redirect("permiso")->with('actualizo', 'datos ');


  }
}

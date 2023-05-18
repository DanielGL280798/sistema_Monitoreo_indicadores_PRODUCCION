<?php

namespace App\Http\Controllers;

use App\monitoreo;
use App\User;
use App\direcciones;
use App\secretarias;
use App\indicador;
use App\ejes;
use App\estrategias;
use App\lineas_accion;
use App\es_transversal;
use App\tipo_indicador;

use App\tipo_indicador2;
use DB;
use Illuminate\Http\Request;

use Illuminate\pagination\paginator;
use Illuminate\pagination\LengthAwarePaginator;



class monitoreocon extends Controller
{
  protected $messages = [
    'fk_secretarias_id.required' => 'Este campo es obligatorio',
    'fk_secretarias_id.exists' => 'El registro seleccionado no es valido',
    'fk_direcciones_id.required' => 'Este campo es obligatorio',
    'fk_direcciones_id.exists' => 'El registro seleccionado no es valido',
    'fk_indicador_id.required' => 'Este campo es obligatorio',
    'fk_indicador_id.exists' => 'El registro seleccionado no es valido',
    'fk_ejes_id.required' => 'Este campo es obligatorio',
    'fk_ejes_id.exists' => 'El registro seleccionado no es valido',
    'fk_estrategias_id.required' => 'Este campo es obligatorio',
    'fk_estrategias_id.exists' => 'El registro seleccionado no es valido',
    'fk_lineaaccion_id.required' => 'Este campo es obligatorio',
    'fk_lineaaccion_id.exists' => 'El registro seleccionado no es valido',
    'fk_es_transversal_id.required' => 'Este campo es obligatorio',
    'fk_es_transversal_id.exists' => 'El registro seleccionado no es valido',
    'fk_tipo_indicador_id.required' => 'Este campo es obligatorio',
    'fk_tipo_indicador_id.exists' => 'El registro seleccionado no es valido',


    'fk_tipo_indicador2_id.required' => 'Este campo es obligatorio',
    'fk_tipo_indicador2_id.exists' => 'El registro seleccionado no es valido',
    'nom_indicador.required'=> 'Este campo es obligatorio.',
    'nom_indicador.max' =>'Solo tiene un limite de 50 letras',
    'nom_indicador.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'des_indicador.required'=> 'Este campo es obligatorio.',
    'des_indicador.max' =>'Solo tiene un limite de 50 letras',
    'des_indicador.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'base_calculo.required'=> 'Este campo es obligatorio.',
    'base_calculo.max' =>'Solo tiene un limite de 50 letras',
    'base_calculo.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'tipo_evidencia.required'=> 'Este campo es obligatorio.',
    'tipo_evidencia.max' =>'Solo tiene un limite de 50 letras',
    'tipo_evidencia.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'linea_base.required'=> 'Este campo es obligatorio.',
    'linea_base.max' =>'Solo tiene un limite de 50 letras',
    'linea_base.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'metas.required'=> 'Este campo es obligatorio.',
    'metas.max' =>'Solo tiene un limite de 50 letras',
    'metas.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'nota.required'=> 'Este campo es obligatorio.',
    'nota.max' =>'Solo tiene un limite de 250 letras',
    'nota.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'desc_acc_rea.required'=> 'Este campo es obligatorio.',
    'desc_acc_rea.max' =>'Solo tiene un limite de 250 letras',
    'desc_acc_rea.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'desc_acc_rea_peri.required'=> 'Este campo es obligatorio.',
    'desc_acc_rea_peri.max' =>'Solo tiene un limite de 250 letras',
    'desc_acc_rea_peri.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'desc_bene_obte.required'=> 'Este campo es obligatorio.',
    'desc_bene_obte.max' =>'Solo tiene un limite de 250 letras',
    'desc_bene_obte.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'nu_tipo_pob_benefi.required'=> 'Este campo es obligatorio.',
    'nu_tipo_pob_benefi.max' =>'Solo tiene un limite de 250 letras',
    'nu_tipo_pob_benefi.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'descripcion_linea_base.required'=> 'Este campo es obligatorio.',
    'descripcion_linea_base.max' =>'Solo tiene un limite de 250 letras',
    'descripcion_linea_base.regex' =>'Solo puede ingresar letras y numeros en este campo.',
    'descripcion_meta.required'=> 'Este campo es obligatorio.',
    'descripcion_meta.max' =>'Solo tiene un limite de 250 letras',
    'descripcion_meta.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      ];

  public function create()
  {

    $monitoreocon = DB::TABLE('monitoreo_indicadores')
    ->leftJoin ('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
    ->leftJoin ('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')
    ->leftJoin ('indicador','monitoreo_indicadores.fk_indicador_id','=','indicador.id')
    ->leftJoin ('ejes','monitoreo_indicadores.fk_ejes_id','=','ejes.id')
    ->leftJoin ('estrategias','monitoreo_indicadores.fk_estrategias_id','=','estrategias.id')
    ->leftJoin ('lineas_accion','monitoreo_indicadores.fk_lineaaccion_id','=','lineas_accion.id')
    ->leftJoin ('es_transversal','monitoreo_indicadores.fk_es_transversal_id','=','es_transversal.id')
    ->leftJoin ('tipo_indicador','monitoreo_indicadores.fk_tipo_indicador_id','=','tipo_indicador.id')
    ->leftJoin ('tipo_indicador2','monitoreo_indicadores.fk_tipo_indicador2_id','=','tipo_indicador2.id')
    ->select ('secretarias.nombre as nombreSecre',
    'direcciones.direcciones',
    'indicador.nombre as nombreIndi',
    'ejes.nombre as nombreEjes',
      'estrategias.nombre as nombreEstra',
      'lineas_accion.nombre as nombreLine',
      'es_transversal.nombre as nombreEs',
      'nom_indicador','des_indicador',
      'tipo_indicador.nombre as nombreTipo','base_calculo',
       'tipo_evidencia',
        'tipo_indicador2.nombre as nombreTipo2','linea_base','metas','nota','desc_acc_rea_peri','desc_acc_rea',
       'desc_bene_obte','nu_tipo_pob_benefi','descripcion_linea_base','descripcion_meta','monitoreo_indicadores.id')
        ->get();


 return view('monitoreo',[
'monitoreocon'=>$monitoreo_indicadores,
'secretarias'=>secretarias::pluck('nombre','id'),
'direcciones'=>direcciones::pluck('direcciones','id'),
'indicador'=>indicador::pluck('nombre','id'),
'ejes'=>ejes::pluck('nombre','id'),
'estrategias'=>estrategias::pluck('nombre','id'),
'lineas_accion'=>lineas_accion::pluck('nombre','id'),
'es_transversal'=>es_transversal::pluck('nombre','id'),
'tipo_indicador'=>tipo_indicador::pluck('nombre','id'),
'tipo_indicador2'=>tipo_indicador2::pluck('nombre','id'),
  ]);

  }
  public function edit(monitoreocon $monitoreocon,Request $request)
  {
    $permisos = DB::TABLE('permiso')

        ->select (

          'fk_autorizacion_id',
          'nombre_boton',
          'permiso.id')
          ->where('permiso.id', '=', 6)
        ->first();

$nombre = $request->get('buscarpor');
$idUser = $request->get('fk_users_id');
    $monitoreocon = DB::TABLE('monitoreo_indicadores')
    ->leftJoin ('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
    ->leftJoin ('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')
    ->leftJoin ('indicador','monitoreo_indicadores.fk_indicador_id','=','indicador.id')
    ->leftJoin ('ejes','monitoreo_indicadores.fk_ejes_id','=','ejes.id')
    ->leftJoin ('estrategias','monitoreo_indicadores.fk_estrategias_id','=','estrategias.id')
    ->leftJoin ('lineas_accion','monitoreo_indicadores.fk_lineaaccion_id','=','lineas_accion.id')
    ->leftJoin ('es_transversal','monitoreo_indicadores.fk_es_transversal_id','=','es_transversal.id')
    ->leftJoin ('tipo_indicador','monitoreo_indicadores.fk_tipo_indicador_id','=','tipo_indicador.id')
    ->leftJoin ('tipo_indicador2','monitoreo_indicadores.fk_tipo_indicador2_id','=','tipo_indicador2.id')
    ->leftJoin ('users','monitoreo_indicadores.fk_users_id','=','users.id')
    ->select ('secretarias.nombre as nombreSecre','direcciones.direcciones','indicador.nombre as nombreIndi','ejes.nombre as nombreEjes',
      'estrategias.nombre as nombreEstra','lineas_accion.nombre as nombreLine','es_transversal.nombre as nombreEs','nom_indicador','des_indicador','tipo_indicador.nombre as nombreTipo','base_calculo'
      ,'tipo_evidencia', 'tipo_indicador2.nombre as nombreTipo2','linea_base','metas','nota','desc_acc_rea_peri','desc_acc_rea',
       'desc_bene_obte','nu_tipo_pob_benefi','descripcion_linea_base','descripcion_meta','monitoreo_indicadores.fk_users_id','monitoreo_indicadores.id')
       // ->where('direcciones','like',"%$nombre%")
       // ->orWhere('secretarias.nombre', 'like',"%$nombre%")
       // ->orWhere('indicador.nombre', 'like',"%$nombre%")


->where('users.id', '=', $idUser)
-> orderBy('id','DESC')
       ->simplePaginate(5);

    return view('monitoreo',[
   'monitoreocon'=>$monitoreocon,
   'permisos'=>$permisos,
   'secretarias'=>secretarias::pluck('nombre','id'),
   'direcciones'=>direcciones::pluck('direcciones','id'),
   'indicador'=>indicador::pluck('nombre','id'),
   'ejes'=>ejes::pluck('nombre','id'),
   'estrategias'=>estrategias::pluck('nombre','id'),
   'lineas_accion'=>lineas_accion::pluck('nombre','id'),
   'es_transversal'=>es_transversal::pluck('nombre','id'),
   'tipo_indicador'=>tipo_indicador::pluck('nombre','id'),
   'tipo_indicador2'=>tipo_indicador2::pluck('nombre','id'),
     ]);
}

public function deletemonitoreo($id){

      $monitoreocon= monitoreo::where ('id',$id)->first();
      $monitoreocon->delete();


    return redirect('inicio2')->with( 'Fue eliminado Correctamente.');
}
public function editmonitoreo($id,Request $request ){
$idUser = $request->get('fk_users_id');

  request()->validate([
    'fk_secretarias_id'=>'required|exists:secretarias,id',
      'id'=>'exists:monitoreo_indicadores,id',
      'fk_direcciones_id'=>'required|exists:direcciones,id',
      'fk_indicador_id'=>'required|exists:indicador,id',
      'fk_ejes_id'=>'required|exists:ejes,id',
      'fk_estrategias_id'=>'required|exists:estrategias,id',
      'fk_lineaaccion_id'=>'required|exists:lineas_accion,id',
      'fk_es_transversal_id'=>'required|exists:es_transversal,id',
      'fk_tipo_indicador_id'=>'required|exists:tipo_indicador,id',
      'fk_tipo_indicador2_id'=>'required|exists:tipo_indicador2,id',
      'nom_indicador'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'des_indicador'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'base_calculo'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'tipo_evidencia'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'linea_base'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'metas'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'nota'=> 'required|max:250|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'desc_acc_rea'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'desc_acc_rea_peri'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'desc_bene_obte'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'nu_tipo_pob_benefi'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'descripcion_meta'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
      'descripcion_linea_base'=> 'required|max:950|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9,])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',

     ], $this->messages);

  //$monitoreocon= monitoreo::findOrFail($id);

      $monitoreocon = DB::TABLE('monitoreo_indicadores');
  $monitoreocon= monitoreo::where ('id',$id)->first();

  $monitoreocon -> fk_secretarias_id = $request -> fk_secretarias_id;
  $monitoreocon -> fk_direcciones_id = $request -> fk_direcciones_id;
  $monitoreocon -> fk_indicador_id = $request -> fk_indicador_id;
  $monitoreocon -> fk_ejes_id = $request -> fk_ejes_id;
  $monitoreocon -> fk_estrategias_id = $request -> fk_estrategias_id;
  $monitoreocon -> fk_lineaaccion_id = $request -> fk_lineaaccion_id;
  $monitoreocon -> fk_es_transversal_id = $request -> fk_es_transversal_id;
  $monitoreocon -> nom_indicador = $request -> nom_indicador;
  $monitoreocon -> des_indicador = $request -> des_indicador;
  $monitoreocon -> fk_tipo_indicador_id = $request -> fk_tipo_indicador_id;
  $monitoreocon -> base_calculo = $request -> base_calculo;
  $monitoreocon -> tipo_evidencia = $request -> tipo_evidencia;
  $monitoreocon -> fk_tipo_indicador2_id = $request -> fk_tipo_indicador2_id;
  $monitoreocon -> linea_base = $request -> linea_base;
  $monitoreocon -> descripcion_linea_base = $request -> descripcion_linea_base;
  $monitoreocon -> metas = $request -> metas;
  $monitoreocon -> descripcion_meta = $request -> descripcion_meta;
  $monitoreocon -> nota = $request -> nota;
  $monitoreocon -> desc_acc_rea = $request -> desc_acc_rea;
  $monitoreocon -> desc_acc_rea_peri = $request -> desc_acc_rea_peri;
  $monitoreocon -> desc_bene_obte = $request -> desc_bene_obte;
  $monitoreocon -> nu_tipo_pob_benefi = $request -> nu_tipo_pob_benefi;

//dd( $monitoreocon->save);
  $monitoreocon->save();

  return redirect("monitoreocon?fk_users_id=$idUser")->with('actualizo','Datos Actualizados Correctamente');
}

public function index(Request $request)
    {

        $nombre = $request->get('buscarpor');

        $monitoreocon = monitoreo::where('fk_direcciones_id',"%$nombre%")->orWhere('fk_secretarias_id', "%$nonbre%")->orWhere('indicador', "%$nmbre%")->paginate(5);


        return view('monitoreo.index', compact('monitoreocon'));
    }

    public function direccioness(Request $request){
        if(isset($request->texto)){
          $direcciones = direcciones::wherefk_secretarias_id($request -> texto)->get();
          returnresponse()->json(
            [
              'lista' => $direcciones,
              'success'=> true
            ]
          );
        }else{
          return response()->json(
            [
              'success' => false
            ]

          );

        }


    }
   }

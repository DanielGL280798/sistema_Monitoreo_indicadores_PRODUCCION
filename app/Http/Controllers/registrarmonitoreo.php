<?php

namespace App\Http\Controllers;
use App\direcciones;
use App\secretarias;
use App\indicador;
use App\monitoreo;
use App\ejes;
use App\estrategias;
use App\lineas_accion;
use App\es_transversal;
use App\tipo_indicador;

use App\tipo_indicador2;
use Illuminate\Http\Request;
use App\Http\Controllers\catalogosecretarias;

class registrarmonitoreo extends Controller
{
    //
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
      'metas.max' =>'Solo tiene un limite de 950 letras',
      'meta.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'nota.required'=> 'Este campo es obligatorio.',
      'nota.max' =>'Solo tiene un limite de 950 letras',
      'nota.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'desc_acc_rea.required'=> 'Este campo es obligatorio.',
      'desc_acc_rea.max' =>'Solo tiene un limite de 950 letras',
      'desc_acc_rea.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'desc_acc_rea_peri.required'=> 'Este campo es obligatorio.',
      'desc_acc_rea_peri.max' =>'Solo tiene un limite de 950 letras',
      'desc_acc_rea_peri.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'desc_bene_obte.required'=> 'Este campo es obligatorio.',
      'desc_bene_obte.max' =>'Solo tiene un limite de 950 letras',
      'desc_bene_obte.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'nu_tipo_pob_benefi.required'=> 'Este campo es obligatorio.',
      'nu_tipo_pob_benefi.max' =>'Solo tiene un limite de 950 letras',
      'nu_tipo_pob_benefi.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'descripcion_linea_base.required'=> 'Este campo es obligatorio.',
      'descripcion_linea_base.max' =>'Solo tiene un limite de 950 letras',
      'descripcion_linea_base.regex' =>'Solo puede ingresar letras y numeros en este campo.',
      'descripcion_meta.required'=> 'Este campo es obligatorio.',
      'descripcion_meta.max' =>'Solo tiene un limite de 950 letras',
      'descripcion_meta.regex' =>'Solo puede ingresar letras y numeros en este campo.',

        ];
        public function create()
        {



          return view('registrarmonitoreo',[
            'registrarmonitoreo'=>$registrarmonitoreo,
'secretarias'=>secretarias::pluck('nombre','id'),
          'direcciones'=>direcciones::pluck('direcciones','id'),
          'indicador'=>indicador::pluck('nombre','id'),
          'ejes'=>ejes::pluck('nombre','id'),
          'estrategias'=>estrategias::pluck('nombre','id'),
          'lineas_accion'=>lineas_accion::pluck('nombre','id'),
          'es_transversal'=>es_transversal::pluck('nombre','id'),
          'tipo_indicador'=>tipo_indicador::pluck('nombre','id'),
          'tipo_indicador2'=>tipo_indicador2::pluck('nombre','id'),
            ]);}

        public function edit(registrarmonitoreo $registrarmonitoreo)
        {

          return view('registrarmonitoreo',[
            'registrarmonitoreo'=>$registrarmonitoreo,
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


    public function store(Request $request)
    {
    request()->validate([

        'fk_secretarias_id'=>'required|exists:secretarias,id',
        'fk_direcciones_id'=>'required|exists:direcciones,id',
        'fk_indicador_id'=>'required|exists:indicador,id',
        'fk_ejes_id'=>'required|exists:ejes,id',
        'fk_estrategias_id'=>'required|exists:estrategias,id',
        'fk_lineaaccion_id'=>'required|exists:lineas_accion,id',
        'fk_es_transversal_id'=>'required|exists:es_transversal,id',
        'fk_tipo_indicador_id'=>'required|exists:tipo_indicador,id',
        'fk_tipo_indicador2_id'=>'required|exists:tipo_indicador2,id',
        'nom_indicador'=> 'required|max:850',
        'des_indicador'=> 'required|max:850',
        'base_calculo'=> 'required|max:150',
        'tipo_evidencia'=> 'required|max:50',
        'linea_base'=> 'required|max:50',
        'metas'=> 'required|int',
        'nota'=> 'required|max:550',
        'desc_acc_rea'=> 'required|max:950',
        'desc_acc_rea_peri'=> 'required|max:950',
        'desc_bene_obte'=> 'required|max:950',
        'nu_tipo_pob_benefi'=> 'required|max:950',
        'descripcion_meta'=> 'required|max:950',
        'descripcion_linea_base'=> 'required|max:950',

       ], $this->messages);

        $monitoreo = new monitoreo();
        $monitoreo -> fk_secretarias_id = $request -> fk_secretarias_id;
        $monitoreo -> fk_direcciones_id = $request -> fk_direcciones_id;
        $monitoreo -> fk_indicador_id = $request -> fk_indicador_id;
        $monitoreo -> fk_ejes_id = $request -> fk_ejes_id;
        $monitoreo -> fk_estrategias_id = $request -> fk_estrategias_id;
        $monitoreo -> fk_lineaaccion_id = $request -> fk_lineaaccion_id;
        $monitoreo -> fk_es_transversal_id = $request -> fk_es_transversal_id;
        $monitoreo -> nom_indicador = $request -> nom_indicador;
        $monitoreo -> des_indicador = $request -> des_indicador;
        $monitoreo -> fk_tipo_indicador_id = $request -> fk_tipo_indicador_id;
        $monitoreo -> base_calculo = $request -> base_calculo;
        $monitoreo -> tipo_evidencia = $request -> tipo_evidencia;
        $monitoreo -> fk_tipo_indicador2_id = $request -> fk_tipo_indicador2_id;
        $monitoreo -> linea_base = $request -> linea_base;
        $monitoreo -> descripcion_linea_base = $request -> descripcion_linea_base;
        $monitoreo -> metas = $request -> metas;
        $monitoreo -> descripcion_meta = $request -> descripcion_meta;
        $monitoreo -> nota = $request -> nota;
        $monitoreo -> desc_acc_rea = $request -> desc_acc_rea;
        $monitoreo -> desc_acc_rea_peri = $request -> desc_acc_rea_peri;
        $monitoreo -> desc_bene_obte = $request -> desc_bene_obte;
        $monitoreo -> nu_tipo_pob_benefi = $request -> nu_tipo_pob_benefi;
        $monitoreo -> fk_users_id  = $request ->fk_users_id;
        $monitoreo -> save();


        return redirect("registrarmonitoreo")->with('guardado', 'datos guardados exitosamente');
    }
    public function index(){
        $secretarias =secretarias::all();
        return view("registrarmonitoreo",compact("secretarias"));
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

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\cargaavance;

use App\avance;
use App\monitoreo;

use Illuminate\pagination\paginator;
use Illuminate\pagination\LengthAwarePaginator;

class ReporteController3 extends Controller
{
    //
    public function PDF($id){
//dd($id);
      $pdf = DB::TABLE('carga_avance')

      ->leftJoin('monitoreo_indicadores','carga_avance.fk_nom_id','=','monitoreo_indicadores.id')
      ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
      ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')



        ->select (
          'secretarias.nombre as nombeSec',
          'direcciones.direcciones as nombedir',
        'monitoreo_indicadores.nom_indicador',
         'monitoreo_indicadores.des_indicador',
         'monitoreo_indicadores.linea_base',
         'monitoreo_indicadores.descripcion_linea_base',
         'monitoreo_indicadores.metas',
         'monitoreo_indicadores.descripcion_meta',


         'carga_avance.porcentaje_avance',
         'carga_avance.Logros_beneficio',
         'carga_avance.acciones',
         'carga_avance.acciones_realizar',
         'carga_avance.id')
          ->where ('carga_avance.id','=',$id)

         ->first();

         $primer =DB::TABLE('carga_avance1')
         ->leftJoin('monitoreo_indicadores','carga_avance1.fk_nom_id','=','monitoreo_indicadores.id')
         ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
         ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')

         ->select (
           'secretarias.nombre as nombeSec',
           'direcciones.direcciones as nombedir',
         'monitoreo_indicadores.nom_indicador',
            'monitoreo_indicadores.des_indicador',
            'monitoreo_indicadores.linea_base',
            'monitoreo_indicadores.descripcion_linea_base',
            'monitoreo_indicadores.metas',
            'monitoreo_indicadores.descripcion_meta',


            'carga_avance1.porcentaje_avance',
            'carga_avance1.Logros_beneficio',
            'carga_avance1.acciones',
            'carga_avance1.acciones_realizar',
            'carga_avance1.id')
             ->where ('carga_avance1.id','=',$id)


            ->first();

            $segundo =DB::TABLE('carga_avance2')
            ->leftJoin('monitoreo_indicadores','carga_avance2.fk_nom_id','=','monitoreo_indicadores.id')
            ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
            ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')

            ->select (
              'secretarias.nombre as nombeSec',
              'direcciones.direcciones as nombedir',
            'monitoreo_indicadores.nom_indicador',
               'monitoreo_indicadores.des_indicador',
               'monitoreo_indicadores.linea_base',
               'monitoreo_indicadores.descripcion_linea_base',
               'monitoreo_indicadores.metas',
               'monitoreo_indicadores.descripcion_meta',


               'carga_avance2.porcentaje_avance',
               'carga_avance2.Logros_beneficio',
               'carga_avance2.acciones',
               'carga_avance2.acciones_realizar',
               'carga_avance2.id')
                ->where ('carga_avance2.id','=',$id)


               ->first();

               $tercer =DB::TABLE('carga_avance3')
               ->leftJoin('monitoreo_indicadores','carga_avance3.fk_nom_id','=','monitoreo_indicadores.id')
               ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
               ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')
               ->select (
                 'secretarias.nombre as nombeSec',
                 'direcciones.direcciones as nombedir',
               'monitoreo_indicadores.nom_indicador',
                  'monitoreo_indicadores.des_indicador',
                  'monitoreo_indicadores.linea_base',
                  'monitoreo_indicadores.descripcion_linea_base',
                  'monitoreo_indicadores.metas',
                  'monitoreo_indicadores.descripcion_meta',


                  'carga_avance3.porcentaje_avance',
                  'carga_avance3.Logros_beneficio',
                  'carga_avance3.acciones',
                  'carga_avance3.acciones_realizar',
                  'carga_avance3.id')
                   ->where ('carga_avance3.id','=',$id)


                  ->first();



// dd($primer);

     $pdf=PDF:: loadView('pdf3', compact('pdf','primer','segundo','tercer'));
     return $pdf->stream('pdf.pdf');
     return $primer->stream('pdf.pdf');
     return $segundo->stream('pdf.pdf');
     return $tercer->stream('pdf.pdf');

   }

   public function create()
   {

     $pdf = DB::TABLE('carga_avance')
     ->leftJoin('monitoreo_indicadores','carga_avance.fk_nom_id','=','monitoreo_indicadores.id')
     ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
     ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')



     ->select (
       'secretarias.nombre as nombeSec',
       'direcciones.direcciones as nombedir',
     'monitoreo_indicadores.nom_indicador',
        'monitoreo_indicadores.des_indicador',
        'monitoreo_indicadores.linea_base',
        'monitoreo_indicadores.descripcion_linea_base',
        'monitoreo_indicadores.metas',
        'monitoreo_indicadores.descripcion_meta',

        'carga_avance.porcentaje_avance',
        'carga_avance.Logros_beneficio',
        'carga_avance.acciones',
        'carga_avance.acciones_realizar',
        'carga_avance.id')
        ->get();

     return view('pdf3',[
     'pdf'=>$pdf,
   ]);
   }
   public function edit(pdf $pdf,Request $request)
   {

     $pdf = DB::TABLE('carga_avance')
     ->leftJoin('monitoreo_indicadores','carga_avance.fk_nom_id','=','monitoreo_indicadores.id')
     ->leftJoin('secretarias','monitoreo_indicadores.fk_secretarias_id','=','secretarias.id')
     ->leftJoin('direcciones','monitoreo_indicadores.fk_direcciones_id','=','direcciones.id')



     ->select (
       'secretarias.nombre as nombeSec',
       'direcciones.direcciones as nombedir',
     'monitoreo_indicadores.nom_indicador',
        'monitoreo_indicadores.des_indicador',
        'monitoreo_indicadores.linea_base',
        'monitoreo_indicadores.descripcion_linea_base',
        'monitoreo_indicadores.metas',
        'monitoreo_indicadores.descripcion_meta',

        'carga_avance.porcentaje_avance',
        'carga_avance.Logros_beneficio',
        'carga_avance.acciones',
        'carga_avance.acciones_realizar',
        'carga_avance.id')

        ->get();
     return view('pdf3',[
     'pdf'=>$pdf,
     ]);


   }

}

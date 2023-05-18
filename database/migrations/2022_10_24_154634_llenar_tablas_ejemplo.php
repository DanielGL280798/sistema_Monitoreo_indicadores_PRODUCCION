<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class LlenarTablasEjemplo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        DB::table('secretarias')->insert([
          ['id' => 1, 'nombre' => 'JEFE DE GABINETE'],
          ['id' => 2, 'nombre' => 'SECRETARIA DEL CAMPO'],
          ['id' => 3, 'nombre' => 'SECRETARIA DES. URB.O.PUB Y MEDIO AMB'],
          ['id' => 4, 'nombre' => 'nose'],
          ['id' => 5, 'nombre' => 'SECRETARIA DE DESARROLLO HUMANO Y SOCIAL'],
          ['id' => 6, 'nombre' => 'SECRETARIA DE FOMENTO  ECONOMICO'],
          ['id' => 7, 'nombre' => 'SECRETARIA  DE  LA TESORERIA Y ADMINISTRACION'],
          ['id' => 8, 'nombre' => 'SECRETARIA GENERAL MUNICIPAL'],
          ['id' => 9, 'nombre' => 'SECRETARIA DE SEGURIDAD CIUDADANA'],
          ['id' => 10, 'nombre' => 'PRESIDENCIA'],
          ['id' => 11, 'nombre' => 'SECRETARIA DE SERVICIOS MUNICIPALES'],
          ['id' => 13, 'nombre' => 'SECRETARIA PARTICULAR'],
          ['id' => 14, 'nombre' => 'SECRETARIA DE CULTURA, EDUCACION. DEPORTE Y JUVENTUD'],

        ]);

        DB::table('direcciones')->insert([
          ['id' => 1, 'fk_secretarias_id' => '10', 'direcciones' => 'DIRECCION DE COMUNICACION SOCIAL'],
          ['id' => 2, 'fk_secretarias_id' => '7', 'direcciones' => 'DIRECCION DE INFORMATICA'],
          ['id' => 3, 'fk_secretarias_id' => '8', 'direcciones' => 'JUEZ CONCILIADOR'],
          ['id' => 4, 'fk_secretarias_id' => '10', 'direcciones' => 'UNIDAD DE ACCESO A LA INFORMACION'],
          ['id' => 5, 'fk_secretarias_id' =>	'4', 'direcciones' => 'nose'],
          ['id' => 6, 'fk_secretarias_id' =>	'4', 'direcciones' => 'nose'],
          ['id' => 7, 'fk_secretarias_id' => '6', 'direcciones' => 'BOLSA DE TRABAJO'],
          ['id' => 8, 'fk_secretarias_id' => '8', 'direcciones' => 'DIRECCION JURIDICA'],
          ['id' => 9, 'fk_secretarias_id' => '14', 'direcciones' => 'DIRECCION DE CULTURA'],
          ['id' => 10, 'fk_secretarias_id' => '10', 'direcciones' => 'Contraloria municipal'],
          ['id' => 11, 'fk_secretarias_id' => '10', 'direcciones' => 'OFICIALIA MAYOR DE LA H. ASAMBLEA  MUNICIPAL'],
          ['id' => 12, 'fk_secretarias_id' => '10', 'direcciones' => 'UNIDAD TECNICA DE EVALUACION Y DESEMPEÃ‘O'],
          ['id' => 13, 'fk_secretarias_id' => '1', 'direcciones' => 'COORDINACION TECNICA'],
          ['id' => 14, 'fk_secretarias_id' => '1', 'direcciones' => 'OFICINA DE SEGUIMIENTO Y EVALUACION'],
          ['id' => 15, 'fk_secretarias_id' => '8', 'direcciones' => 'DIRECCION JUNTA MUNICIPAL DE RECLUTAMIENTO'],
          ['id' => 16, 'fk_secretarias_id' => '8', 'direcciones' => 'OFICIALIA DE PARTES'],
          ['id' => 17, 'fk_secretarias_id' => '8', 'direcciones' => 'OFICINA DE GESTION POLITICA'],
          ['id' => 18, 'fk_secretarias_id' => '8', 'direcciones' => 'INVENTARIOS'],
          ['id' => 19, 'fk_secretarias_id' => '8', 'direcciones' => 'INSTANCIA DE LA MUJER'],
          ['id' => 20, 'fk_secretarias_id' => '8', 'direcciones' => 'DIRECCION DE ARCHIVO MUNICIPAL'],
          ['id' => 21, 'fk_secretarias_id' => '8', 'direcciones' =>	'DIRECCION DE REGLAMENTOS Y ESPECTACULOS'],
          ['id' => 22, 'fk_secretarias_id' => '8', 'direcciones' =>	'DIRECCION DEL REGISTRO DEL ESTADO FAMILIAR'],
          ['id' => 23, 'fk_secretarias_id' => '8', 'direcciones' =>	'DIRECCION DE CONCILIADOR  MUNICIPAL'],
          ['id' => 24, 'fk_secretarias_id' => '8', 'direcciones' =>	'OFICINA DE CONSTANCIAS Y CERTIFICACIONES OFICIALES'],
          ['id' => 25, 'fk_secretarias_id' => '8', 'direcciones' =>	'OFICINA MUNICIPAL DE LA SECRETARIA DE RELACIONES EXTERIORES'],
          ['id' => 26, 'fk_secretarias_id' => '8', 'direcciones' =>	'OFICINA DE JUNTA PERMANENTE DE CONCILIACION'],
          ['id' => 27, 'fk_secretarias_id' => '8', 'direcciones' =>	'SALUD A TU ALCANCE'],
          ['id' => 28, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE EGRESOS'],
          ['id' => 29, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE CONTABILIDAD'],
          ['id' => 30, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE INGRESOS'],
          ['id' => 31, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE IMPUESTO PREDIAL'],
          ['id' => 32, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE EJECUCION FISCAL'],
          ['id' => 33, 'fk_secretarias_id' => '7', 'direcciones' =>	'TRASLADO DE DOMINIO'],
          ['id' => 34, 'fk_secretarias_id' => '7', 'direcciones' =>	'CATASTRO'],
          ['id' => 35, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION GENGERAL DE ADMINISTRACION'],
          ['id' => 36, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE RECURSOS HUMANOS'],
          ['id' => 37, 'fk_secretarias_id' => '7', 'direcciones' =>	'UNIDAD  TECNICA DE INNOVACION GUBERNAMENTAL'],
          ['id' => 38, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE COMUNICACION DIGITAL'],
          ['id' => 39, 'fk_secretarias_id' => '7', 'direcciones' =>	'DIRECCION DE AREA DE LOGISTICA Y EVENTOS ESPECIALES'],
          ['id' => 40, 'fk_secretarias_id' => '3', 'direcciones' =>	'DIRECCION DE OBRAS PUBLICAS'],
          ['id' => 41, 'fk_secretarias_id' =>	'3', 'direcciones' => 'DIRECCION DE PLANACION Y MOVILIDAD URBANA'],
          ['id' => 42, 'fk_secretarias_id' =>	'3', 'direcciones' => 'DIRECCION DE LICENCIAS Y PERMISOS'],
          ['id' => 43, 'fk_secretarias_id' =>	'3', 'direcciones' => 'DIRECCION DE ORDENAMIENTO TERRITORIAL Y AGRARIO'],
          ['id' => 44, 'fk_secretarias_id' =>	'3', 'direcciones' => 'DIRECCION DE MEDIO AMBIENTE(ECOLOGIA)'],
          ['id' => 45, 'fk_secretarias_id' =>	'5', 'direcciones' => 'DIRECTORA DE CEAVIF'],
          ['id' => 46, 'fk_secretarias_id' =>	'5', 'direcciones' => 'DIRECCION DE PUEBLOS Y COMUNIDADES INDIGENAS'],
          ['id' => 47, 'fk_secretarias_id' =>	'8', 'direcciones' => 'COORDINACION TECNICA DE SECRETARIA GENERAL MUNICIPAL'],
          ['id' => 48, 'fk_secretarias_id' =>	'3', 'direcciones' => 'COORDINACION TECNICA DE SRIA. DE DESARROLLO URBANO , O.P Y M .AMB'],
          ['id' => 49, 'fk_secretarias_id' =>	'5', 'direcciones' => 'COORDINACION TECNICA DE SRIA. DE DESARROLLO HUMANO Y SOCIAL'],
          ['id' => 50, 'fk_secretarias_id' =>	'10', 'direcciones' => 'SECRETARIO PARTICULAR DEL PRESIDENTE MUNICIPAL'],
          ['id' => 51, 'fk_secretarias_id' =>	'10', 'direcciones' => 'UNIDAD TECNICA DE GESTION GUBERNAMENTAL'],
          ['id' => 52, 'fk_secretarias_id' =>	'8', 'direcciones' => 'ENCARGADO DE DESPACHO'],
          ['id' => 53, 'fk_secretarias_id' =>	'5', 'direcciones' => 'COMEDORES COMUNITARIOS'],
          ['id' => 54, 'fk_secretarias_id' =>	'5', 'direcciones' => 'DIRECCION DE SANIDAD MUNICIPAL'],
          ['id' => 55, 'fk_secretarias_id' =>	'5', 'direcciones' => 'DIRECCION DE CENTRO DE  DES.COMU. (POLIGONOS)'],
          ['id' => 56, 'fk_secretarias_id' =>	'5', 'direcciones' => 'INSTITUTO NAL... DE LAS PERSONAS ADULTAS MAYORES(INAPAM)'],
          ['id' => 57, 'fk_secretarias_id' =>	'4', 'direcciones' => 'nose'],
          ['id' => 58, 'fk_secretarias_id' =>	'14', 'direcciones' => 'COORDINACION TECNICA SRIA. DE CUL. EDUCC. DEPORTE Y JUVENTUD'],
          ['id' => 59, 'fk_secretarias_id' =>	'14', 'direcciones' => 'DIRECCION DE CULATURA FISICA Y RECREACION'],
          ['id' => 60, 'fk_secretarias_id' =>	'14', 'direcciones' => 'JEFATURA DE MUSEOS'],
          ['id' => 61, 'fk_secretarias_id' => '14', 'direcciones' => 'DIRECCION DE EDUCACION'],
          ['id' => 62, 'fk_secretarias_id' => '14', 'direcciones' => 'DIRECCION DE BIBLIOTECAS'],
          ['id' => 63, 'fk_secretarias_id' => '14', 'direcciones' => 'DIRECCION DE UNIDAD DEPORTIVA'],
          ['id' => 64, 'fk_secretarias_id' => '14', 'direcciones' => 'INSTANCIA MUNICIPAL DE JUVENTUD'],
          ['id' => 65, 'fk_secretarias_id' => '6', 'direcciones' => 'COORDINACION TECNICA  DE FOMENTO ECONOMICO'],
          ['id' => 66, 'fk_secretarias_id' => '6', 'direcciones' => 'DIREC.ENLACE SERV.FED Y ESTATALES PROSPERA 65 Y MAS.'],
          ['id' => 67, 'fk_secretarias_id' => '6', 'direcciones' => 'ENLACE DE PROFECO'],
          ['id' => 68, 'fk_secretarias_id' => '6', 'direcciones' => 'DIRECCION DE DESARROLLO COMERCIAL'],
          ['id' => 69, 'fk_secretarias_id' => '6', 'direcciones' => 'DIRECCION DE FOMENTO INDUSTRIAL'],
          ['id' => 70, 'fk_secretarias_id' => '6', 'direcciones' => 'DIRECCION DE MEJORA REGULATORIA'],
          ['id' => 71, 'fk_secretarias_id' => '6', 'direcciones' => 'DIRECCION DE TURISMO'],
          ['id' => 72, 'fk_secretarias_id' => '11', 'direcciones' => 'COORDINACION TECNICA DE SERVICIOS MUNICIPALES'],
          ['id' => 73, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE MERCADOS Y CENTROS DE ABASTO'],
          ['id' => 74, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE RASTRO MUNICIPAL'],
          ['id' => 75, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE MANTENIMIENTO URBANO'],
          ['id' => 76, 'fk_secretarias_id' => '11', 'direcciones' => 'JEFATURA DE PARQUES Y JARDINES'],
          ['id' => 77, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE LIMPIAS Y DIPOSICION DE RESIDUOS'],
          ['id' => 78, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE ZOOLOGICO MUNICIPAL'],
          ['id' => 79, 'fk_secretarias_id' => '11', 'direcciones' => 'DIRECCION DE PANTEONES MUNICIPALES |'],
          ['id' => 80, 'fk_secretarias_id' => '2', 'direcciones' => 'COORDINACION TECNICA DE SECRETARIA DEL CAMPO'],
          ['id' => 81,	'fk_secretarias_id' => '2', 'direcciones' => 'DIRECCION DE DESARROLLO RURAL Y ATENCION A USUARIOS'],
          ['id' => 82,	'fk_secretarias_id' => '2', 'direcciones' => 'DIRECCION DE GESTION Y FOMENTO'],
          ['id' => 83,	'fk_secretarias_id' => '7', 'direcciones' => 'LICITACIONES'],




        ]);

        DB::table('ejes')->insert([
          ['id' => 1, 'nombre' => 'eje 1'],
          ['id' => 2, 'nombre' => 'eje 2'],
          ['id' => 3, 'nombre' => 'eje 3'],
          ['id' => 4, 'nombre' => 'eje 4'],
                ]);

        DB::table('estrategias')->insert([
          ['id' => 1, 'nombre' => 'estrategia 1'],
          ['id' => 2, 'nombre' => 'estrategia 2'],
          ['id' => 3, 'nombre' => 'estrategia 3'],
          ['id' => 4, 'nombre' => 'estrategia 4'],

        ]);


        DB::table('es_transversal')->insert([
          ['id' => 1, 'nombre' => 'estrategia transversal 1'],
          ['id' => 2, 'nombre' => 'estrategia transversal 2'],
          ['id' => 3, 'nombre' => 'estrategia transversal 3'],
          ['id' => 4, 'nombre' => 'estrategia transversal 4'],
          ]);

          DB::table('Indicador')->insert([
            ['id' => 1, 'nombre' => 'Indicador 1'],
            ['id' => 2, 'nombre' => 'Indicador 2'],
            ['id' => 3, 'nombre' => 'Indicador 3'],
            ['id' => 4, 'nombre' => 'Indicador 4'],

          ]);

          DB::table('lineas_accion')->insert([
            ['id' => 1, 'nombre' => 'lineas_accion 1'],
            ['id' => 2, 'nombre' => 'lineas_accion 2'],
            ['id' => 3, 'nombre' => 'lineas_accion 3'],
            ['id' => 4, 'nombre' => 'lineas_accion 4'],

          ]);
          DB::table('periodicidad')->insert([
            ['id' => 1, 'nombre' => '1° Trimestre'],
            ['id' => 2, 'nombre' => '2° Trimestre'],
            ['id' => 3, 'nombre' => '3° Trimestre'],
            ['id' => 4, 'nombre' => '4° Trimestre'],


          ]);
          DB::table('status')->insert([
            ['id' => 1, 'nombre' => 'status 1'],
            ['id' => 2, 'nombre' => 'status 2'],
            ['id' => 3, 'nombre' => 'status 3'],
            ['id' => 4, 'nombre' => 'status 4'],

          ]);
          DB::table('tipo_indicador')->insert([
            ['id' => 1, 'nombre' => 'tipo_indicador 1'],
            ['id' => 2, 'nombre' => 'tipo_indicador 2'],
            ['id' => 3, 'nombre' => 'tipo_indicador 3'],
            ['id' => 4, 'nombre' => 'tipo_indicador 4'],

          ]);
          DB::table('tipo_indicador2')->insert([
            ['id' => 1, 'nombre' => 'Nivel INDICADORES 1'],
            ['id' => 2, 'nombre' => 'Nivel INDICADORES 2'],
            ['id' => 3, 'nombre' => 'Nivel INDICADORES 3'],
            ['id' => 4, 'nombre' => 'Nivel INDICADORES 4'],

          ]);

           DB::table('monitoreo_indicadores')->insert([
           ['id'=> 1
           ,'fk_secretarias_id' => 1
           ,'fk_direcciones_id' => 1
           ,'fk_indicador_id' => 1
           ,'fk_ejes_id' => 1
           ,'fk_estrategias_id' => 1
           ,'fk_lineaaccion_id' => 1
           ,'fk_es_transversal_id' => 1
           ,'nom_indicador' => 'Registro Monitoreo 1'
           ,'des_indicador'=> 'Registro Monitoreo 1'
           ,'fk_tipo_indicador_id' => 1
           ,'base_calculo'=> 'Registro Monitoreo 1',
           'fk_periodicidad_id' => 1
           ,'tipo_evidencia'=> 'Registro Monitoreo 1'
           ,'fk_tipo_indicador2_id' => 1
           ,'linea_base'=> 'Registro Monitoreo 1'
           ,'descripcion_linea_base'=> 'Registro Monitoreo 1'
           ,'metas'=> 1
           ,'descripcion_meta'=> 'Registro Monitoreo 1'
           ,'nota'=> 'Registro Monitoreo 1'
           ,'desc_acc_rea_peri'=> 'Registro Monitoreo 1'
           ,'desc_acc_rea'=> 'Registro Monitoreo 1',
          'desc_bene_obte'=> 'Registro Monitoreo 1'
          ,'nu_tipo_pob_benefi'=> 'Registro Monitoreo 1'
        ],
        ['id'=> 2
        ,'fk_secretarias_id' => 2
        ,'fk_direcciones_id' => 2
        ,'fk_indicador_id' => 2
        ,'fk_ejes_id' => 2
        ,'fk_estrategias_id' => 2
        ,'fk_lineaaccion_id' => 2
        ,'fk_es_transversal_id' => 2
        ,'nom_indicador' => 'Registro Monitoreo 2'
        ,'des_indicador'=> 'Registro Monitoreo 2'
        ,'fk_tipo_indicador_id' => 2
        ,'base_calculo'=> 'Registro Monitoreo 2',
        'fk_periodicidad_id' => 2
        ,'tipo_evidencia'=> 'Registro Monitoreo 2'
        ,'fk_tipo_indicador2_id' => 2
        ,'linea_base'=> 'Registro Monitoreo 2'
        ,'descripcion_linea_base'=> 'Registro Monitoreo 2'
        ,'metas'=> 2
        ,'descripcion_meta'=> 'Registro Monitoreo 2'
        ,'nota'=> 'Registro Monitoreo 2'
        ,'desc_acc_rea_peri'=> 'Registro Monitoreo 2'
        ,'desc_acc_rea'=> 'Registro Monitoreo 2',
       'desc_bene_obte'=> 'Registro Monitoreo 2'
       ,'nu_tipo_pob_benefi'=> 'Registro Monitoreo 2'
     ],
     ['id'=> 3
     ,'fk_secretarias_id' => 3
     ,'fk_direcciones_id' => 3
     ,'fk_indicador_id' => 3
     ,'fk_ejes_id' => 3
     ,'fk_estrategias_id' => 3
     ,'fk_lineaaccion_id' => 3
     ,'fk_es_transversal_id' => 3
     ,'nom_indicador' => 'Registro Monitoreo 3'
     ,'des_indicador'=> 'Registro Monitoreo 3'
     ,'fk_tipo_indicador_id' => 3
     ,'base_calculo'=> 'Registro Monitoreo 3',
     'fk_periodicidad_id' => 3
     ,'tipo_evidencia'=> 'Registro Monitoreo 3'
     ,'fk_tipo_indicador2_id' => 3
     ,'linea_base'=> 'Registro Monitoreo 3'
     ,'descripcion_linea_base'=> 'Registro Monitoreo 3'
     ,'metas'=> 3
     ,'descripcion_meta'=> 'Registro Monitoreo 3'
     ,'nota'=> 'Registro Monitoreo 3'
     ,'desc_acc_rea_peri'=> 'Registro Monitoreo 3'
     ,'desc_acc_rea'=> 'Registro Monitoreo 3',
    'desc_bene_obte'=> 'Registro Monitoreo 3'
    ,'nu_tipo_pob_benefi'=> 'Registro Monitoreo 3'
  ],
  ['id'=> 4
  ,'fk_secretarias_id' => 4
  ,'fk_direcciones_id' => 4
  ,'fk_indicador_id' => 4
  ,'fk_ejes_id' => 4
  ,'fk_estrategias_id' => 4
  ,'fk_lineaaccion_id' => 4
  ,'fk_es_transversal_id' => 4
  ,'nom_indicador' => 'Registro Monitoreo 4'
  ,'des_indicador'=> 'Registro Monitoreo 4'
  ,'fk_tipo_indicador_id' => 4
  ,'base_calculo'=> 'Registro Monitoreo 4',
  'fk_periodicidad_id' => 4
  ,'tipo_evidencia'=> 'Registro Monitoreo 4'
  ,'fk_tipo_indicador2_id' => 4
  ,'linea_base'=> 'Registro Monitoreo 4'
  ,'descripcion_linea_base'=> 'Registro Monitoreo 4'
  ,'metas'=> 4
  ,'descripcion_meta'=> 'Registro Monitoreo 4'
  ,'nota'=> 'Registro Monitoreo 4'
  ,'desc_acc_rea_peri'=> 'Registro Monitoreo 4'
  ,'desc_acc_rea'=> 'Registro Monitoreo 4',
 'desc_bene_obte'=> 'Registro Monitoreo 4'
 ,'nu_tipo_pob_benefi'=> 'Registro Monitoreo 4'
  ]
          ]);
          DB::table('carga_avance')->insert([
         ['id'=> 1
         ,'fk_nom_id'=> 1
         ,'meta' => 1
         ,'evidencia'=> 'evidencia/evidencia_carga de avance 1.pdf'
         ,'fk_periodicidad_id'=>  1
         ,'porcentaje_avance'=> 90.00
         ,'Logros_beneficio'=> 'carga de avance 1'
         ,'acciones'=> 'carga de avance 1'
         ,'acciones_realizar' => 'carga de avance 1'
         ,'observaciones' => 'carga de avance 1'],
         ['id'=> 2
         ,'fk_nom_id'=> 2
         , 'meta' => 2
         ,'evidencia'=> 'evidencia/evidencia_carga de avance 2.pdf'
         ,'fk_periodicidad_id'=>  2
         ,'porcentaje_avance'=> 80.00
         ,'Logros_beneficio'=> 'carga de avance 2'
         ,'acciones'=> 'carga de avance 2'
         ,'acciones_realizar' => 'carga de avance 2'
         ,'observaciones' => 'carga de avance 2'],
         ['id'=> 3
         ,'fk_nom_id'=> 3
         , 'meta' => 3
         ,'evidencia'=> 'evidencia/evidencia_carga de avance 3.pdf'
         ,'fk_periodicidad_id'=>  3
         ,'porcentaje_avance'=> 100.00
         ,'Logros_beneficio'=> 'carga de avance 3'
         ,'acciones'=> 'carga de avance 3'
         ,'acciones_realizar' => 'carga de avance 3'
         ,'observaciones' => 'carga de avance 1'],
         ['id'=> 4
         ,'fk_nom_id'=> 4
         , 'meta' => 4
         ,'evidencia'=> 'evidencia/evidencia_carga de avance 4.pdf'
         ,'fk_periodicidad_id'=>  4
         ,'porcentaje_avance'=> 70.00
         ,'Logros_beneficio'=> 'carga de avance 4'
         ,'acciones'=> 'carga de avance 4'
         ,'acciones_realizar' => 'carga de avance 4'
         ,'observaciones' => 'carga de avance 1'],
         ]);
         DB::table('carga_avance1')->insert([
        ['id'=> 1
        ,'fk_nom_id'=> 1
        ,'meta' => 1
        ,'evidencia'=> 'evidencia/evidencia_carga de avance 1.pdf'
        ,'fk_periodicidad_id'=>  1
        ,'porcentaje_avance'=> 90.00
        ,'Logros_beneficio'=> 'carga de avance 1'
        ,'acciones'=> 'carga de avance 1'
        ,'acciones_realizar' => 'carga de avance 1'
        ,'observaciones' => 'carga de avance 1'],
        ['id'=> 2
        ,'fk_nom_id'=> 2
        , 'meta' => 2
        ,'evidencia'=> 'evidencia/evidencia_carga de avance 2.pdf'
        ,'fk_periodicidad_id'=>  2
        ,'porcentaje_avance'=> 80.00
        ,'Logros_beneficio'=> 'carga de avance 2'
        ,'acciones'=> 'carga de avance 2'
        ,'acciones_realizar' => 'carga de avance 2'
        ,'observaciones' => 'carga de avance 2'],
        ['id'=> 3
        ,'fk_nom_id'=> 3
        , 'meta' => 3
        ,'evidencia'=> 'evidencia/evidencia_carga de avance 3.pdf'
        ,'fk_periodicidad_id'=>  3
        ,'porcentaje_avance'=> 100.00
        ,'Logros_beneficio'=> 'carga de avance 3'
        ,'acciones'=> 'carga de avance 3'
        ,'acciones_realizar' => 'carga de avance 3'
        ,'observaciones' => 'carga de avance 1'],
        ['id'=> 4
        ,'fk_nom_id'=> 4
        , 'meta' => 4
        ,'evidencia'=> 'evidencia/evidencia_carga de avance 4.pdf'
        ,'fk_periodicidad_id'=>  4
        ,'porcentaje_avance'=> 70.00
        ,'Logros_beneficio'=> 'carga de avance 4'
        ,'acciones'=> 'carga de avance 4'
        ,'acciones_realizar' => 'carga de avance 4'
        ,'observaciones' => 'carga de avance 1'],
        ]);
        DB::table('carga_avance2')->insert([
       ['id'=> 1
       ,'fk_nom_id'=> 1
       ,'meta' => 1
       ,'evidencia'=> 'evidencia/evidencia_carga de avance 1.pdf'
       ,'fk_periodicidad_id'=>  1
       ,'porcentaje_avance'=> 90.00
       ,'Logros_beneficio'=> 'carga de avance 1'
       ,'acciones'=> 'carga de avance 1'
       ,'acciones_realizar' => 'carga de avance 1'
       ,'observaciones' => 'carga de avance 1'],
       ['id'=> 2
       ,'fk_nom_id'=> 2
       , 'meta' => 2
       ,'evidencia'=> 'evidencia/evidencia_carga de avance 2.pdf'
       ,'fk_periodicidad_id'=>  2
       ,'porcentaje_avance'=> 80.00
       ,'Logros_beneficio'=> 'carga de avance 2'
       ,'acciones'=> 'carga de avance 2'
       ,'acciones_realizar' => 'carga de avance 2'
       ,'observaciones' => 'carga de avance 2'],
       ['id'=> 3
       ,'fk_nom_id'=> 3
       , 'meta' => 3
       ,'evidencia'=> 'evidencia/evidencia_carga de avance 3.pdf'
       ,'fk_periodicidad_id'=>  3
       ,'porcentaje_avance'=> 100.00
       ,'Logros_beneficio'=> 'carga de avance 3'
       ,'acciones'=> 'carga de avance 3'
       ,'acciones_realizar' => 'carga de avance 3'
       ,'observaciones' => 'carga de avance 1'],
       ['id'=> 4
       ,'fk_nom_id'=> 4
       , 'meta' => 4
       ,'evidencia'=> 'evidencia/evidencia_carga de avance 4.pdf'
       ,'fk_periodicidad_id'=>  4
       ,'porcentaje_avance'=> 70.00
       ,'Logros_beneficio'=> 'carga de avance 4'
       ,'acciones'=> 'carga de avance 4'
       ,'acciones_realizar' => 'carga de avance 4'
       ,'observaciones' => 'carga de avance 1'],
       ]);
       DB::table('carga_avance3')->insert([
      ['id'=> 1
      ,'fk_nom_id'=> 1
      ,'meta' => 1
      ,'evidencia'=> 'evidencia/evidencia_carga de avance 1.pdf'
      ,'fk_periodicidad_id'=>  1
      ,'porcentaje_avance'=> 90.00
      ,'Logros_beneficio'=> 'carga de avance 1'
      ,'acciones'=> 'carga de avance 1'
      ,'acciones_realizar' => 'carga de avance 1'
      ,'observaciones' => 'carga de avance 1'],
      ['id'=> 2
      ,'fk_nom_id'=> 2
      , 'meta' => 2
      ,'evidencia'=> 'evidencia/evidencia_carga de avance 2.pdf'
      ,'fk_periodicidad_id'=>  2
      ,'porcentaje_avance'=> 80.00
      ,'Logros_beneficio'=> 'carga de avance 2'
      ,'acciones'=> 'carga de avance 2'
      ,'acciones_realizar' => 'carga de avance 2'
      ,'observaciones' => 'carga de avance 2'],
      ['id'=> 3
      ,'fk_nom_id'=> 3
      , 'meta' => 3
      ,'evidencia'=> 'evidencia/evidencia_carga de avance 3.pdf'
      ,'fk_periodicidad_id'=>  3
      ,'porcentaje_avance'=> 100.00
      ,'Logros_beneficio'=> 'carga de avance 3'
      ,'acciones'=> 'carga de avance 3'
      ,'acciones_realizar' => 'carga de avance 3'
      ,'observaciones' => 'carga de avance 1'],
      ['id'=> 4
      ,'fk_nom_id'=> 4
      , 'meta' => 4
      ,'evidencia'=> 'evidencia/evidencia_carga de avance 4.pdf'
      ,'fk_periodicidad_id'=>  4
      ,'porcentaje_avance'=> 70.00
      ,'Logros_beneficio'=> 'carga de avance 4'
      ,'acciones'=> 'carga de avance 4'
      ,'acciones_realizar' => 'carga de avance 4'
      ,'observaciones' => 'carga de avance 1'],
      ]);

           }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

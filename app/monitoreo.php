<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monitoreo extends Model
{

  protected $table = 'monitoreo_indicadores';


protected $fillable = [
'id',
'fk_secretarias_id',
'fk_direcciones_id',
'fk_indicador_id',
'fk_ejes_id',
'fk_estrategias_id',
'fk_lineaaccion_id',
'fk_es_transversal_id',
'nom_indicador',
'des_indicador',
'fk_tipo_indicador_id',
'base_calculo',
'tipo_evidencia',
'fk_tipo_indicador2_id',
'linea_base',
'descripcion_linea_base',
'metas',
'descripcion_meta',
'nota',
'desc_acc_rea_peri',
'desc_acc_rea',
'desc_bene_obte',
'nu_tipo_pob_benefi',
'fk_users_id'];
}

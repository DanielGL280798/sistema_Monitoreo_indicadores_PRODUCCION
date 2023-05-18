<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJsController;
use App\avance;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|sexo, edad, mes
*/

Route::get('/', function () {    return view('inicio');})->name('inicio');
Route::get('/registrarmonitoreo', 'registrarmonitoreo@edit','registrarmonitoreo@create','registrarmonitoreo@index', function () {return view('registrarmonitoreo');})->name('registrarmonitoreo')->middleware('auth');
Route::post('/registrarmonitoreo', 'registrarmonitoreo@store')->name('registrarmonitoreo.store');

Route::get('/reportes/{id}'
, 'ReporteController@PDF'
, 'ReporteController@edit'
,'ReporteController@create'
, function () {return view('ReporteController');})->name('Reporte')->middleware('auth');

Route::get('/reportes1/{id}'
, 'ReporteController1@PDF'
, 'ReporteController1@edit'
,'ReporteController1@create'
, function () {return view('ReporteController1');})->name('Reporte1')->middleware('auth');

Route::get('/reportes2/{id}'
, 'ReporteController2@PDF'
, 'ReporteController2@edit'
,'ReporteController2@create'
, function () {return view('ReporteController2');})->name('Reporte2')->middleware('auth');

Route::get('/reportes3/{id}'
, 'ReporteController3@PDF'
, 'ReporteController3@edit'
,'ReporteController3@create'
, function () {return view('ReporteController3');})->name('Reporte3')->middleware('auth');

Route::get(
  '/cargadeavance'
  ,'cargadeavance@edit'
  ,'cargadeavance@create'
  , function () {
    return view('cargadeavance');
  }
) -> name('cargadeavance')->middleware('auth');
Route::get(
  '/cargadeavance1'
  ,'cargadeavance1@edit'
  ,'cargadeavance1@create'
  , function () {
    return view('cargadeavance1');
  }
) -> name('cargadeavance1')->middleware('auth');
Route::get(
  '/cargadeavance2'
  ,'cargadeavance2@edit'
  ,'cargadeavance2@create'
  , function () {
    return view('cargadeavance2');
  }
) -> name('cargadeavance2')->middleware('auth');
Route::get(
  '/cargadeavance3'
  ,'cargadeavance3@edit'
  ,'cargadeavance3@create'
  , function () {
    return view('cargadeavance3');
  }
) -> name('cargadeavance3')->middleware('auth');

Route::get(
  '/cargadeavance4'
  ,'cargadeavance4@edit'
  ,'cargadeavance4@create'
  , function () {
    return view('cargadeavance4');
  }
) -> name('cargadeavance3')->middleware('auth');
Route::post('/cargadeavance', 'cargadeavance@store')->name('cargadeavance.store');
Route::get('deletecarga/{id}', 'cargadeavance@deleteavance')->name('deleteavance')->middleware('auth');
Route::put('modi/{id}', 'cargadeavance@updatecarga')->name('updatecarga');

Route::get('/evidencia/{id}',function($id){

   $link = avance::where('id',$id)->first()->evidencia;

    return response()->file(Storage::disk('local')->path($link),[
      'Content-Type'=>'application/pdf',
    'Content-Disposition'=>'file=Documento']);

  })->name('cargaavances')->middleware('auth');

Route::get('/modificarmonitoreoindi', 'modificarmonitoreoindi@edit','modificarmonitoreoindi@create', function () {return view('modificarmonitoreoindi');})->name('modificarmonitoreoindi')->middleware('auth')->middleware('auth');
Route::post('/modificarmonitoreoindi', 'modificarmonitoreoindi@store')->name('modificarmonitoreoindi.store');

Route::get('/monitoreocon', 'monitoreocon@edit','monitoreocon@create', function () {return view('monitoreocon');})->name('monitoreocon')->middleware('auth');
Route::post('/monitoreocon', 'monitoreocon@store')->name('monitoreocon.store');

Route::get('/permiso', 'permiso@edit','permiso@create', function () {return view('permiso');})->name('permiso')->middleware('auth');
Route::put('mod/{id}', 'permiso@updateper')->name('updateper');

Route::put( 'upda/{id}', 'monitoreocon@editmonitoreo')->name('editmonitoreo');
Route::get('deletemoni/{id}','monitoreocon@deletemonitoreo')->name('deletemonitoreo')->middleware('auth');

Route::get('/inicio2', function () {return view('inicio2');})->name('inicio2')->middleware('auth');
Route::get('/catalogodirecciones', 'catalogodirecciones@create','catalogodirecciones@edit',  function () {return view('catalogodirecciones');})->name('catalogodirecciones')->middleware('auth');
Route::post('/catalogodirecciones', 'catalogodirecciones@store')->name('catalogodirecciones.store');
Route::get('deletesdirec/{id}', 'catalogodirecciones@deletedireciones')->name('deletedireciones')->middleware('auth');
Route::put('updates/{id}', 'catalogodirecciones@updatedire')->name('updatedire');

Route::get('/pdf', 'ReporteController@edit','ReporteController@create',  function () {return view('pdf');})->name('pdf')->middleware('auth');
Route::post('/pdf','ReporteController@edit','ReporteController@create', 'pdf@store')->name('pdf.store');
Route::get('/pdf1', 'ReporteController1@edit','ReporteController1@create',  function () {return view('pdf1');})->name('pdf1')->middleware('auth');
Route::post('/pdf1','ReporteController1@edit','ReporteController1@create', 'pdf1@store')->name('pdf1.store');
Route::get('/pdf2', 'ReporteController2@edit','ReporteController2@create',  function () {return view('pdf2');})->name('pdf2')->middleware('auth');
Route::post('/pdf2','ReporteController2@edit','ReporteController2@create', 'pdf2@store')->name('pdf2.store');
Route::get('/pdf3', 'ReporteController3@edit','ReporteController3@create',  function () {return view('pdf3');})->name('pdf3')->middleware('auth');
Route::post('/pdf3','ReporteController3@edit','ReporteController3@create', 'pdf3@store')->name('pdf3.store');

Route::get('/catalogostatus', 'catalogostatus@edit','catalogostatus@create',function () {return view('catalogostatus');})->name('catalogostatus')->middleware('auth');
Route::post('/catalogostatus', 'catalogostatus@store')->name('catalogostatus.store');
Route::get('deletestatus/{id}', 'catalogostatus@deletestat')->name('deletestat')->middleware('auth');
Route::put('updatesta/{id}', 'catalogostatus@updatestatus')->name('updatestatus');


Route::get('/catalogosecretarias', 'catalogosecretarias@create','catalogosecretarias@edit',   function () {return view('catalogosecretarias');})->name('catalogosecretarias')->middleware('auth');
Route::post('/catalogosecretarias', 'catalogosecretarias@store')->name('catalogosecretarias.store');
Route::get('delete/{id}', 'catalogosecretarias@deleteChil')->name('deleteChil')->middleware('auth');
Route::put('update/{id}', 'catalogosecretarias@updateChildren')->name('updateChildren');

Route::get('/catalogoejes', 'catalogoejes@create','catalogosejes@edit', function () {return view('catalogoejes');})->name('catalogoejes')->middleware('auth');
Route::post('/catalogoejes', 'catalogoejes@store')->name('catalogoejes.store');
Route::put('modificareje/{id}', 'catalogoejes@modificareje')->name('modificareje');
Route::get('deletes/{id}', 'catalogoejes@deleteeje')->name('deleteeje')->middleware('auth');

Route::get('/catalogoindicador', 'catalogoindicador@create','catalogoindicador@edit', function () {return view('catalogoindicador');})->name('catalogoindicador')->middleware('auth');
Route::post('/catalogoindicador', 'catalogoindicador@store')->name('catalogoindicador.store');
Route::put('modificarindi/{id}', 'catalogoindicador@modificarindicador')->name('modificarindicador');
Route::get('deleteindi/{id}', 'catalogoindicador@deleteindicador')->name('deleteindicador')->middleware('auth');

Route::get('/catalogoestrategias', 'catalogoestrategias@create','catalogoestrategias@edit', function () {return view('catalogoestrategias');})->name('catalogoestrategias')->middleware('auth');
Route::post('/catalogoestrategias', 'catalogoestrategias@store')->name('catalogoestrategias.store');
Route::put('modificarestra/{id}', 'catalogoestrategias@modificarestrategia')->name('modificarestrategia');
Route::get('deleteestra/{id}', 'catalogoestrategias@deleteestrategias')->name('deleteestrategias')->middleware('auth');


Route::get('/catalogolineas_accion','catalogolineas_accion@create','catalogolineas_accion@edit', function () {return view('catalogolineas_accion');})->name('catalogolineas_accion')->middleware('auth');
Route::post('/catalogolineas_accion', 'catalogolineas_accion@store')->name('catalogolineas_accion.store');
Route::put('modificarlineasaccion/{id}', 'catalogolineas_accion@modificarlineas')->name('modificarlineas');
Route::get('deletelineasaccion/{id}', 'catalogolineas_accion@deletelineas')->name('deletelineas')->middleware('auth');


Route::get('/catalogoes_transversal','catalogoes_transversal@create','catalogoes_transversal@edit', function () {return view('catalogoes_transversal');})->name('catalogoes_transversal')->middleware('auth');
Route::post('/catalogoes_transversal', 'catalogoes_transversal@store')->name('catalogoes_transversal.store');
Route::put('modificartrans/{id}', 'catalogoes_transversal@modificartransversal')->name('modificartransversal');
Route::get('deletestrans/{id}', 'catalogoes_transversal@deletestransversal')->name('deletestransversal')->middleware('auth');


Route::get('/catalogotipo_indicador','catalogotipo_indicador@create','catalogotipo_indicador@edit', function () {return view('catalogotipo_indicador');})->name('catalogotipo_indicador')->middleware('auth');
Route::post('/catalogotipo_indicador', 'catalogotipo_indicador@store')->name('catalogotipo_indicador.store');
Route::put('modificartipoindi/{id}', 'catalogotipo_indicador@modificartipoindicador')->name('modificartipoindicador');
Route::get('deletetipoindi/{id}', 'catalogotipo_indicador@deletetipoindicador')->name('deletetipoindicador')->middleware('auth');

Route::get('/catalogotipo_indicador2','catalogotipo_indicador2@create','catalogotipo_indicador2@edit', function () {return view('catalogotipo_indicador2');})->name('catalogotipo_indicador2')->middleware('auth');
Route::post('/catalogotipo_indicador2', 'catalogotipo_indicador2@store')->name('catalogotipo_indicador2.store');
Route::put('modificartipoindi2/{id}', 'catalogotipo_indicador2@modificartipoindicador2')->name('modificartipoindicador2');
Route::get('deletetipoindi2/{id}', 'catalogotipo_indicador2@deletetipoindicador2')->name('deletetipoindicador2')->middleware('auth');

Route::get('/catalogoperiodicidad','catalogoperiodicidad@create','catalogoperiodicidad@edit',  function () {return view('catalogoperiodicidad');})->name('catalogoperiodicidad')->middleware('auth');
Route::post('/catalogoperiodicidad', 'catalogoperiodicidad@store')->name('catalogoperiodicidad.store');
Route::put('modificarperi/{id}', 'catalogoperiodicidad@modificarperiocidad')->name('modificarperiocidad');
Route::get('deleteperi/{id}', 'catalogoperiodicidad@deleteperiocidad')->name('deleteperiocidad')->middleware('auth');

Route::get('/cargaavance','cargaavance@create','cargaavance@edit',  function () {return view('cargaavance');})->name('cargaavance')->middleware('auth');
Route::post('/cargaavance', 'cargaavance@store')->name('cargaavance.store');
Route::get('/cargaavance1','cargaavance1@create','cargaavance1@edit',  function () {return view('cargaavance1');})->name('cargaavance1')->middleware('auth');
Route::post('/cargaavance1', 'cargaavance1@store')->name('cargaavance1.store');
Route::get('/cargaavance2','cargaavance2@create','cargaavance2@edit',  function () {return view('cargaavance2');})->name('cargaavance2')->middleware('auth');
Route::post('/cargaavance2', 'cargaavance2@store')->name('cargaavance2.store');
Route::get('/cargaavance3','cargaavance3@create','cargaavance3@edit',  function () {return view('cargaavance3');})->name('cargaavance3')->middleware('auth');
Route::post('/cargaavance3', 'cargaavance3@store')->name('cargaavance3.store');

Route::get('/secretarias',[App\Http\Controller\registrarmonitoreo::class,'index'])->middleware('auth');
Route::get('/direccioness',[App\Http\Controller\registrarmonitoreo::class,'direccioness'])->middleware('auth');

Auth::routes();
// Auth::routes(['verify' => true,
//     'register' => false]);
// Auth::routes();
//Route::get('/', 'HomeController@index')->name('home');

<?php

namespace App\Http\Controllers;

use App\User;
use App\Servicios;
use App\Clasificaciones;
use App\secretarias;
use App\ejes;
use Illuminate\Http\Request;
use Redirect;
use Response;
use DB;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('inicio2');
    }


}

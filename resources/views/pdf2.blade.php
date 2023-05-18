<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Reporte 3° trimestre</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    table, tr, th, td{
  border-style: double;
text-align: center;
table-layout: fixed;
width: 100%;
border-collapse: collapse;
    }
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;


        }
        header {
            position: fixed;
            top: 0cm;
            left: 2cm;
            right: 2cm;
            height: 2cm;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
h6{
  font-family: Arial, Helvetica, Sans-serif;
  color: white;}
  p{
    font-family: Arial, Helvetica, Sans-serif;
}

    </style>
</head>
<body>
    <header><br>
      <img src="{{ asset('images/administration/logo.png')}}" height="45" width="100" style="float: left;"/>
      <img src="{{ asset('images/administration/logo2.png')}}" height="60" width="60" style="float: right;"/>


    </header>
    <main>

        <div class="container">

            <table class="table">
              <tr>
                <th colspan="12"><h7>Reporte 3° trimestre</h7></th>

                </tr>

                   <tr>
              <tr>
                <th colspan="12"><h8>{{$pdf  ->nombeSec}}</h8></th>
              </tr>
              <tr>
                <th colspan="12"><h9>{{$pdf ->nombedir}}</h9></th>
                </tr>

              <tr>

                <th colspan="12" width="50%" bgcolor="#ABB2B9"><h6>Nombre del indicador:</h6></th>


                </tr>
                <tr>


                  <th colspan="12"><p align="justify">{{$pdf -> nom_indicador}}</p></th>

                  </tr>
                   <tr>
                     <th colspan="12" idth="50%" bgcolor="#ABB2B9"><h6>Descripción del indicador:</h6></th>
                   </tr>
                    <tr>
                     <th colspan="12"><p align="justify">{{$pdf ->des_indicador}}</p></th>
                 </tr>
                 <tr>
                     <th colspan="3" idth="50%" bgcolor="#ABB2B9"><h6>Linea base (año)</h6></th>
                     <th colspan="9" idth="50%" bgcolor="#ABB2B9"><h6>Descripción:</h6></th>

                   </tr>
                    <tr>
                     <th colspan="3">{{$pdf -> linea_base}}</th>
                     <th colspan="9"><p align="justify">{{$pdf -> descripcion_linea_base}}</p></th>

                 </tr>

                 <tr>
                     <th colspan="3" idth="50%" bgcolor="#ABB2B9"><h6>Meta:</h6></th>
                     <th colspan="9" idth="50%" bgcolor="#ABB2B9"><h6>Descripción:</h6></th>
                   </tr>
                    <tr>
                     <th colspan="3">{{$pdf -> metas}}</th>
                     <th colspan="9"><p align="justify">{{$pdf ->descripcion_meta}}</p></th>
                   </tr>
                   <tr>
                         <th colspan="12" idth="50%" bgcolor="#ABB2B9"><h6>Logros/Beneficios:</h6></th>
                       </tr>
                       <tr>
                         <th colspan="12"><p align="justify">{{$pdf -> Logros_beneficio}}</p></th>
                   </tr>
                   <tr>
                         <th colspan="12" idth="50%" bgcolor="#ABB2B9"><h6>Acciones a realizar:</h6></th>
                       </tr>
                       <tr>
                         <th colspan="12"><p align="justify">{{$pdf -> acciones}}</p></th>
                   </tr>
                   <tr>
                         <th colspan="12" idth="50%" bgcolor="#ABB2B9"><h6>Acciones por realizar:</h6></th>
                       </tr>
                       <tr>
                         <th colspan="12"><p align="justify">{{$pdf ->acciones_realizar}}</p></th>
                   </tr>
                 <tr>
                     <th colspan="12" idth="50%" bgcolor="#ABB2B9"><h6>Semaforizacion</h6></th>

                 </tr>
                 <tr>
                       <th colspan="4" idth="50%" bgcolor="#ABB2B9"><h6>Periodo</h6></th>
                       <th colspan="2" idth="50%" bgcolor="#ABB2B9"><h6>1 er trimestre</h6></th>
                       <th colspan="2" idth="50%" bgcolor="#ABB2B9"><h6>2 do trimestre</h6></th>
                       <th colspan="2" idth="50%" bgcolor="#ABB2B9"><h6>3 er trimestre</h6></th>
                       <th colspan="2" idth="50%" bgcolor="#ABB2B9"><h6>4 to trimestre</h6></th>
                 </tr>
                 <tr>
                       <th colspan="4" idth="50%" bgcolor="#ABB2B9"><h6>Porcentaje de Avance</h6></th>
                       <th colspan="2"
                       @if((int)$pdf -> porcentaje_avance >=0 && (int)$pdf -> porcentaje_avance <= 50)
                         style="background:red;"

                         @elseif ((int)$pdf -> porcentaje_avance >=51 && (int)$pdf -> porcentaje_avance <= 85)
                         style="background:yellow;"
                         @elseif ((int)$pdf -> porcentaje_avance >=86)
                         style="background:green;"
                         @elseif ((int)$pdf -> porcentaje_avance >= 100)
                         style="background:green;"

                       @endif>
                      {{ $pdf -> porcentaje_avance}}%

                         </th>
{{$primer -> porcentaje_avance = $pdf -> porcentaje_avance + $primer -> porcentaje_avance}}
                        <th colspan="2"
                        @if((int)$primer -> porcentaje_avance >=0 && (int)$primer -> porcentaje_avance <= 50)
                          style="background:red;"

                          @elseif ((int)$primer -> porcentaje_avance >=51 && (int)$primer -> porcentaje_avance <= 85)
                          style="background:yellow;"
                          @elseif ((int)$primer -> porcentaje_avance >=86)
                          style="background:green;"
                          @elseif ((int)$primer -> porcentaje_avance >= 100)
                          style="background:green;"

                        @endif>


                            {{ $primer -> porcentaje_avance}}%



                        </th>
{{$segundo -> porcentaje_avance =  $primer -> porcentaje_avance +$segundo -> porcentaje_avance}}
                         <th colspan="2"   @if((int)$segundo -> porcentaje_avance >=0 && (int)$segundo -> porcentaje_avance <= 50)
                             style="background:red;"

                             @elseif ((int)$segundo -> porcentaje_avance >=51 && (int)$segundo -> porcentaje_avance <= 85)
                             style="background:yellow;"
                             @elseif ((int)$segundo -> porcentaje_avance >=86)
                             style="background:green;"
                             @elseif ((int)$segundo -> porcentaje_avance >= 100)
                             style="background:green;"

                           @endif >
{{$segundo -> porcentaje_avance}}%


                             </th>
                         <th colspan="2">
                             </th>
                 </tr>


                    <tr>

                          <th colspan="12">Representacion Grafica de Avance del Indicador</th>
                        </tr>


                </tbody>

            </table>

                  <!-- Apply any bg-* class to to the info-box to color it -->

                  @php
                      $suma=0;
                  @endphp
                    <div class="info-box-content">
                      <span class="info-box-text">Porcentaje de Avance</span>
                      <span class="info-box-number">
                        @php
         $suma=$pdf -> porcentaje_avance + $primer -> porcentaje_avance + $segundo->porcentaje_avance;//sumanos los valores, ahora solo fata mostrar dicho valor
       @endphp
       {{$suma}}%
                        </span>
                      <!-- The progress section is optional -->
                    </div><!-- /.info-box-content -->
                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: {{$suma}}" aria-valuenow="15"  aria-valuemax="100">{{$suma}}</div>
<!-- /.info-box-content -->

        </div>
    </main>

    <footer>
        <p><strong>Boulevard Nuevo San Nicolas S/N, Fracc. Nuevo San Nicolas 43640 Tulancingo de Bravo;Hidalgo</strong></p>
    </footer>
</body>
</html>

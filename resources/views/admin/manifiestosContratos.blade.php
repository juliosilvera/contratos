@extends('...main')

@section('content')
<?php
$values = [
'' => '',
'Q' => '',
'NQ' => '',
'NT' => ''
];
?>
<div class="page-header">
  <h1>Manifiestos de Contratos</h1>
</div>
<div class="container">
        <div class="col-md-6">
          <table class="table table-bordered" id="resultados">
           <tbody>
              <tr>
              <td></td>
                <td colspan="8">MANIFIESTO DESDE {{ $fecha['desde'] }} HASTA {{ $fecha['hasta'] }}</td>
              </tr>
              <tr>
              <td></td>
                <td colspan="8">SANTO DOMINGO</td>
              </tr>
              <tr>
                <td></td>
                <td>Q's</td>
                <td>NQ's</td>
                <td>Tour</td>
                <td>N.T.</td>
                <td>T. Show</td>
                <td>Ventas</td>
                <td>Ingresado</td>
                <td>Volumen</td>
              </tr>
            </tbody>
          </table>
        </div>
</div>
<div class="container" style="width: 100%; overflow: scroll">
                <div class="col-md-6">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>UP</th>
                        <th>INVITADO 1</th>
                        <th>EDAD</th>
                        <th>INVITADO 2</th>
                        <th>EDAD</th>
                        <th>TMK</th>
                        <th>CONF</th>
                        <th>SUPER</th>
                        <th>GERT</th>
                        <th>CALIF</th>
                        <th>LINER</th>
                        <th>CLOSER 1</th>
                        <th>CLOSER 2</th>
                        <th>CLOSER 3</th>
                        <th>CONTRATO</th>
                        <th>MILLAS</th>
                        <th>VALOR DEL CONTRATO</th>
                        <th>VALOR INGRESADO HOY</th>
                        <th>VALOR CUI</th>
                        <th>MERCADEO</th>
                        <th>ESTADO</th>
                        <th>TARJETAS</th>
                        <th>OBSERVACIONES</th>
                      </tr>
                    </thead>
@foreach($dataContratos as $contrato)
<?php
$data = DB::table('manifiestos')->where('id', $contrato->manifiesto)->first();
$values[$data->calificacion] += 1;
$values
?>
                    <tbody>
                      <tr>
                        <td>UP</td>
                         <td>{{ $data->nombres1 }}</td>
                         <td>{{ $data->edad1 }}</td>
                         <td>{{ $data->nombres2 }}</td>
                         <td>{{ $data->edad2 }}</td>
                         <td>{{ $data->creado_por }}</td>
                         <td>{{ $data->confirmado_por }}</td>
                         <td>{{ $data->supervisor }}</td>
                         <td>{{ $data->gerente }}</td>
                         <td>{{ $data->calificacion }}</td>
                         <td>{{ $data->liner }}</td>
                         <td>{{ $data->closer1 }}</td>
                         <td>{{ $data->closer2 }}</td>
                         <td>{{ $data->closer3 }}</td>
                         <td>{{ $contrato->contrato }}</td>
                         <td>{{ $contrato->millas_anio }}</td>
                         <td>{{ $contrato->valor_inversion }}</td>
                         <td>{{ $contrato->valor_hoy }}</td>
                         <td>{{ $contrato->cui }}</td>
                         <td>MERCADEO</td>
                         <td>{{ $contrato->forma_pago }}</td>
                         <td>{{ $data->tarjetas }}</td>
                         <td>{{ $data->observaciones }}</td>
                      </tr>
                    </tbody>
@endforeach
                  </table>
                  </div>
</div>
@stop

@section('footer')
<script>
$("#resultados").append('<tr>\
                                         <td>TMK</td>\
                                         <td>{{ $values['Q'] }}</td>\
                                         <td>{{ $values['NQ'] }}}</td>\
                                         <td></td>\
                                         <td>{{ $values['NT'] }}}</td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                       </tr>\
                                       <tr>\
                                         <td>TOTAL</td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                         <td></td>\
                                       </tr>');
</script>
@stop
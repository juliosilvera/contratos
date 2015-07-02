@extends('main')

@section('content')
<div style="width:100%; overflow:scroll">
	<table class="table table-striped">
		<tr align="center">
			<td>
				SALA
			</td>
			<td>
				FECHA
			</td>
			<td>
				HORA DE INVITACION
			</td>
			<td>
				NOMBRES
			</td>
			<td>
				EDAD
			</td>
			<td>
				CONYUGUE
			</td>
			<td>
				EDAD
			</td>
			<td>
				ESTADO CIVIL
			</td>
			<td>
				TELEFONO CASA 1
			</td>
			<td>
				TELEFONO CASA 2
			</td>
			<td>
				TELEFONO CELULAR 1
			</td>
			<td>
				TELEFONO CELULAR 2
			</td>
			<td>
				TELEFONO OFICINA
			</td>
			<td>
				TARJETA
			</td>
			<td>
				FUENTE
			</td>
			<td>
				OPERADOR
			</td>
			<td>
				SUPERVISOR
			</td>
			<td>
				TIPO CITA
			</td>
			<td>
				GERENTE
			</td>
		</tr>
@foreach($manifiestos as $m)
{!! Form::open(['method' => 'PATCH', 'url' => '/confirmador/'.$m->id]) !!}
<tr>
			<td>
			<div style="width: 150px">
			     {!! Form::select('sala', $selPlaza, $m->sala, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
				<input type="text" name="fecha" class="datepicker" value="{{$m->fecha}}">
			</td>
			<td>
				<input type="text" name="hora_invitacion" value="{{$m->hora_invitacion}}">
			</td>
			<td>
				<input type="text" name="nombres1" value="{{$m->nombres1}}">
			</td>
			<td>
				<input type="text" name="edad1" value="{{$m->edad1}}">
			</td>
			<td>
				<input type="text" name="nombres2" value="{{$m->nombres2}}">
			</td>
			<td>
				<input type="text" name="edad2" value="{{$m->edad2}}">
			</td>
			<td>
			<div style="width: 150px">
				<select name="estado_civil" class="form-control">
					<option value="CASADO">CASADO</option>
					<option value="SOLTERO">SOLTERO</option>
					<option value="VIUDO">VIUDO</option>
					<option value="DIVORCIADO">DIVORCIADO</option>
					<option value="UNION LIBRE">UNION LIBRE</option>
					<option value="SEPARADO">SEPARADO</option>
				</select>
				</div>
			</td>
			<td>
				<input type="text" name="telefono_casa1" value="{{$m->telefono_casa1}}">
			</td>
			<td>
				<input type="text" name="telefono_casa2" value="{{$m->telefono_casa2}}">
			</td>
			<td>
				<input type="text" name="telefono_celular1" value="{{$m->telefono_celular1}}">
			</td>
			<td>
				<input type="text" name="telefono_celular2" value="{{$m->telefono_celular2}}">
			</td>
			<td>
				<input type="text" name="telefono_oficina" value="{{$m->telefono_oficina}}">
			</td>
			<td>
				<input type="text" name="tarjetas" id="tarjetas" value="{{$m->tarjetas}}">
			</td>
			<td>
			<div style="width: 150px">
			{!! Form::select('fuente', $selFuente, $m->fuente, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<div style="width: 150px">
            {!! Form::select('operador', $selOperador, $m->operador, ['class' => 'form-control']) !!}
            </div>
			</td>
			<td>
			<div style="width: 150px">
            {!! Form::select('supervisor', $selSupervisor, $m->supervisor, ['class' => 'form-control']) !!}
            </div>
			</td>
			<td>
			<div style="width: 50px">
            {!! Form::select('tipo_cita', ['CT' => 'CT', 'CC' => 'CC', 'R' => 'R', 'SN' => 'SN'], $m->tipo_cita, ['class' => 'form-control']) !!}
            </div>
			</td>
            <td>
            <div style="width: 150px">
            <select name='tele_closer' class="form-control">
            	<option value='7185'>JOSELIN RUIZ</option>
            	<option value='2077'>CARLO CUENCA</option>
            	<option value='7085'>FANNY CASTRO</option>
            </select>
            </div>
            </td>
            <td>
            <div style="width: 150px">
            <select name='opciones_tele_closer' class="form-control">
            	<option value='NC'>NC</option>
            	<option value='CNX'>CNX</option>
            	<option value='OK'>OK</option>
            	<option value='OKT'>OKT</option>
            	<option value='VLL'>VLL</option>
            	<option value='SN'>SN</option>
            	</select>
            	</div>
            </td>
			<td>
			<div style="width: 150px">
			{!! Form::select('gerente', ['2077' => 'CARLO CUENCA'], $m->gerente, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
				<div style="width: 150px">
            			<!-- Submit Button -->
            			    {!! Form::submit('Confirmar', ['class' => 'btn-primary form-control']) !!}

            			</div>
			</td>
		</tr>
{!! Form::close() !!}
@endforeach
	</table>
</div>

<h4>Cargados Hoy</h4>
<div style="width:100%; overflow:scroll">
<table class="table table-striped">
	<tr>
			<td>
				SALA
			</td>
			<td>
				FECHA
			</td>
			<td>
				HORA DE INVITACION
			</td>
			<td>
				NOMBRES
			</td>
			<td>
				EDAD
			</td>
			<td>
				CONYUGUE
			</td>
			<td>
				EDAD
			</td>
			<td>
				ESTADO CIVIL
			</td>
			<td>
				TELEFONO CASA 1
			</td>
			<td>
				TELEFONO CASA 2
			</td>
			<td>
				TELEFONO CELULAR 1
			</td>
			<td>
				TELEFONO CELULAR 2
			</td>
			<td>
				TELEFONO OFICINA
			</td>
			<td>
				TARJETA
			</td>
			<td>
				FUENTE
			</td>
			<td>
				OPERADOR
			</td>
			<td>
				SUPERVISOR
			</td>
			<td>
				TIPO CITA
			</td>
			<td>
				TELE CLOSER
			</td>
			<td>
				OPCIONES TELE CLOSER
			</td>
			<td>
				GERENTE
			</td>
		</tr>
@foreach($confirmados as $conf)
<tr>
			<td>
				{{$conf->sala}}
			</td>
			<td>
				{{$conf->fecha}}
			</td>
			<td>
				{{$conf->hora_invitacion}}
			</td>
			<td>
				{{$conf->nombres1}}
			</td>
			<td>
				{{$conf->edad1}}
			</td>
			<td>
				{{$conf->nombres2}}
			</td>
			<td>
				{{$conf->edad2}}
			</td>
			<td>
				{{$conf->estado_civil}}
			</td>
			<td>
				{{$conf->telefono_casa1}}
			</td>
			<td>
				{{$conf->telefono_casa2}}
			</td>
			<td>
				{{$conf->telefono_celular1}}
			</td>
			<td>
				{{$conf->telefono_celular2}}
			</td>
			<td>
				{{$conf->telefono_oficina}}
			</td>
			<td>
				{{$conf->tarjetas}}
			</td>
			<td>
				{{$conf->fuente}}
			</td>
			<td>
				{{$conf->operador}}
			</td>
			<td>
				{{$conf->supervisor}}
			</td>
			<td>
				{{$conf->tipo_cita}}
			</td>
			<td>
				{{$conf->tele_closer}}
			</td>
			<td>
				{{$conf->opciones_tele_closer}}
			</td>
			<td>
				{{$conf->gerente}}
			</td>
		</tr>
@endforeach
</table>
</div>


@stop

@section('footer')
<script>
$(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });
    });
</script>
@stop

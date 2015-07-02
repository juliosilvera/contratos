@extends('main')

@section('content')
<center>
	<h4>PRE-MANIFIESTO</h4>
</center>

{!! Form::open(['url' => 'mercadeo']) !!}
@include('part._form1')
	<div class="form-group">
	    {!! Form::submit('Guardar', ['class' => 'btn-primary form-control']) !!}
	    {!! Form::hidden('fecha_creado', Carbon\Carbon::now()->format('Y-m-d')) !!}
	    {!! Form::hidden('confirmado', 'false') !!}
	</div>
{!! Form::close() !!}
<h4>Cargados Hoy</h4>
<div style="width:100%; height: 300px; overflow:scroll">
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
				TELE CLOSER
			</td>
			<td>
				OPCIONES TELE CLOSER
			</td>
			<td>
				GERENTE
			</td>
		</tr>
@foreach($mostrar as $m)
{!! Form::open(['url' => 'articles']) !!}


<tr align="center">
			<td>
				{{ $m->sala }}
			</td>
			<td>
				{{ $m->fecha }}
			</td>
			<td>
				{{ $m->hora_invitacion }}
			</td>
			<td>
				{{ $m->nombres1 }}
			</td>
			<td>
				{{ $m->edad1 }}
			</td>
			<td>
				{{ $m->nombres2 }}
			</td>
			<td>
				{{ $m->edad2 }}
			</td>
			<td>
				{{ $m->estado_civil }}
			</td>
			<td>
				{{ $m->telefono_casa1 }}
			</td>
			<td>
				{{ $m->telefono_casa2 }}
			</td>
			<td>
				{{ $m->telefono_celular1 }}
			</td>
			<td>
				{{ $m->telefono_celular2 }}
			</td>
			<td>
				{{ $m->telefono_oficina }}
			</td>
			<td>
				{{ $m->tarjetas }}
			</td>
			<td>
				{{ $m->fuente }}
			</td>
			<td>
				{{ $m->operador }}
			</td>
			<td>
				{{ $m->supervisor }}
			</td>
			<td>
				{{ $m->tipo_cita }}
			</td>
			<td>

			</td>
			<td>

			</td>
			<td>
				{{ $m->gerente }}
			</td>
		</tr>
{!! Form::close() !!}
@endforeach
</table>
</div>
<br><br>


@stop

@section('footer')
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
    dateFormat: "yy-mm-dd"
    });
  });
  </script>
@stop
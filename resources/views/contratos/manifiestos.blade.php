@extends('main')

@section('content')
<div class="page-header">
  <h1>Manifiestos</h1>
</div>
<div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Sala</th>
                <th>Hora Invitación</th>
                <th>Nombres</th>
                <th>Edad</th>
                <th>Conyugue</th>
                <th>Edad</th>
                <th>Estado Civil</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
            @foreach($valores as $v)
            <tr>
            		<td>
            			{{ $v->sala }}
            		</td>
            		<td>
            			{{ $v->hora_invitacion }}
            		</td>
            		<td>
            			{{ $v->nombres1 }}
            		</td>
            		<td>
            			{{ $v->edad1 }}
            		</td>
            		<td>
            			{{ $v->nombres2 }}
            		</td>
            		<td>
            			{{ $v->edad2 }}
            		</td>
            		<td>
            			{{ $v->estado_civil }}
            		</td>
            		<td>
            			<a href="/contratos/{{ $v->id }}/edit">EDITAR</a>
            		</td>
            	</tr>
            @endforeach
            </tbody>
          </table>
        </div>
@stop

@section('footer')

@stop
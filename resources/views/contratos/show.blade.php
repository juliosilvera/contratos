@extends('main')

@section('content')
<h1>Lista de Contratos</h1>
{!! Form::open(['method' => 'GET', 'url' => '/contratos/show']) !!}
<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <!-- Contrato Form Input -->
        <div class="form-group">
             {!! Form::label('contrato', 'Contrato:') !!}
             {!! Form::text('contrato', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Filtrar', ['class' => 'btn-primary form-control']) !!}
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>

{!! Form::close() !!}
<div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Nombres del Beneficiario</th>
                <th>Apellidos del Beneficiario</th>
                <th>Imprimir</th>
                <th>Borrar</th>
              </tr>
            </thead>
            <tbody>
             @foreach($contrato as $c)
                <tr>
                <td>{{ $c->contrato }}</td>
                <td>{{ $c->fecha }}</td>
                <td>{{ $c->nombres1 }}</td>
                <td>{{ $c->apellidos1 }}</td>
                <td><a href="" onclick="imprimir('{{ $c->id }}')"><img src="http://uxrepo.com/static/icon-sets/ionicons/svg/printer.svg" style="width: 30px"> </a> </td>
                <td>
                {!! Form::open(['id' => 'formDestroy', 'action' => ['ContratosController@destroy', $c->id]]) !!}
                {!! Form::close() !!}
                <a href="/contratos/{{ $c->id }}/borrar"><img src="http://www.icon2s.com/wp-content/uploads/2013/07/black-white-metro-delete-icon.png" style="width: 30px"> </a>
                </td>
                </tr>
             @endforeach
            </tbody>
          </table>
        </div>
<!-- Editar http://iconshow.me/media/images/Mixed/Free-Flat-UI-Icons/png/512/new-24-512.png
    Imprimir http://uxrepo.com/static/icon-sets/ionicons/svg/printer.svg
    Borrar http://www.icon2s.com/wp-content/uploads/2013/07/black-white-metro-delete-icon.png
-->

@stop

@section('footer')

@stop
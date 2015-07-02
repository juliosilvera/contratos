@extends('main')

@section('content')
{!! Form::model($manifiesto, ['method' => 'PATCH', 'action' => ['ContratosController@update']]) !!}
@include('part._form3', ['SubmitButtonText' => 'Actualizar Manifiesto'])
{!! Form::close() !!}
@stop

@section('footer')
@include('part.scriptContratos')
@stop
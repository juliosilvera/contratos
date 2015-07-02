@extends('main')

@section('content')
<h1>Contratos</h1>
{!! Form::open(['url' => 'contratos']) !!}
@include('part._form2', ['SubmitButtonText' => 'Guardar Contrato'])
{!! Form::close() !!}
@stop

@section('footer')
@include('part.scriptContratos')
@stop
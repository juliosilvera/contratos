@extends('main')

@section('content')
<h1>Pagina de Prueba</h1>
<hr/>
<h4>Texto de Prueba</h4>
@foreach($datos as $d)
<p>
Dato = {{ $d }}
</p>
@endforeach
@stop

@section('footer')

@stop
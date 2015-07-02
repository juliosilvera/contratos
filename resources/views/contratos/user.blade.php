@extends('main')

@section('content')
<div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Contratos Nuevos</h3>
            </div>
            <div class="panel-body">
             <button type="button" class="btn btn-lg btn-default" onclick="window.open('contratos/create', '_self')">Contratos Nuevos</button>
            </div>
          </div>
          <div class="">
            <div class="panel-heading">

            </div>
            <div class="panel-body">

            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Cargar Manifiestos</h3>
            </div>
            <div class="panel-body">
              <button type="button" class="btn btn-lg btn-success" {{--onclick="window.open('', '_self')"--}}>Cargar Manifiestos</button>
            </div>
          </div>
          <div >
            <div >
              <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">

            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Ver Contratos Cargados</h3>
            </div>
            <div class="panel-body">
              <button type="button" class="btn btn-lg btn-warning" onclick="window.open('contratos/show', '_self')">Ver Contratos Cargadps</button>
            </div>
          </div>
          <div >
            <div >
              <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">

            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>
@stop

@section('footer')

@stop
@extends('main')

@section('content')
<center>
<div class="row">
        <div class="col-md-4">
          <h2>Manifiestos</h2>

        {!! Form::open(['url' => 'admin/reportes/manifiestosContratos']) !!}

        <!-- Desde Form Input -->
        <div class="form-group">
             {!! Form::label('desde', 'Desde:') !!}
             {!! Form::text('desde', null, ['class' => 'datepicker form-control']) !!}
        </div>
        <!-- Hasta Form Input -->
        <div class="form-group">
             {!! Form::label('hasta', 'Hasta:') !!}
             {!! Form::text('hasta', null, ['class' => 'datepicker form-control']) !!}
        </div>

        <!-- Submit Button -->
                    <br>
        {!! Form::submit('Filtrar', ['class' => 'btn-primary form-control']) !!}


            {!! Form::close() !!}
        </div>
        <div class="col-md-4">
          <h2>Códigos Mercadeo</h2>
            <a href="gerMer_usuarios"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR8Dkc_8zbLasfQDRjE-6db4C08ngr3eM4myiSuz-aZj_-BdD_P" style="width:80px"></a>
       </div>
        <div class="col-md-4">
          <h2>Reportes</h2>
          {!! Form::open(['url' => 'admin/reportes/rep_general']) !!}

          {!! Form::select('fecha', $manifiestos['reportes'], null, ['class' => 'form-control']) !!}
          <!-- Submit Button -->
          <br>
          {!! Form::submit('Filtrar', ['class' => 'btn-primary form-control']) !!}

          {!! Form::close() !!}
        </div>
      </div>
</center>
@stop

@section('footer')
@include('part.scriptContratos')
@stop
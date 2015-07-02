@extends('main')

@section('content')
<div class="row">
        <div class="col-md-4">
        <h3>Codigos de Operador</h3>
        <h4>Agregar Operador</h4>
        {!! Form::open(['url' => 'admin/save_users/saveOperador']) !!}
            <!-- Nombre Form Input -->
            <div class="form-group">
                 {!! Form::label('Nombre', 'Nombre:') !!}
                 {!! Form::text('nombre_operador', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Codigo Form Input -->
            <div class="form-group">
                 {!! Form::label('Codigo', 'Codigo:') !!}
                 {!! Form::text('codigo_operador', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                {!! Form::submit('Crear Operador', ['class' => 'btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}

        <h4>Borrar Operador</h4>
        {!! Form::open(['url' => 'admin/save_users/delOperador']) !!}
        <div class="form-group">
             {!! Form::select('id', $data['ops'], null, ['id' => 'tag_list', 'class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
        {!! Form::submit('Borrar Operador', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        </div>
        <div class="col-md-4">
        <h3>Codigos de Fuente</h3>
        <h4>Agregar Fuente</h4>
        {!! Form::open(['url' => 'admin/save_users/saveFuente']) !!}
        <!-- Fuente Form Input -->
        <div class="form-group">
             {!! Form::label('Fuente', 'Fuente:') !!}
             {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Guardar Fuente', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        <h4>Borrar Fuente</h4>
        {!! Form::open(['url' => 'admin/save_users/delFuente']) !!}
        <div class="form-group">
             {!! Form::select('id', $data['fue'], null, [ 'class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Borrar Fuente', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        </div>
        <div class="col-md-4">
        <h3>Codigos de Supervisor</h3>
        <h4>Agregar Supervisor</h4>
        {!! Form::open(['url' => 'admin/save_users/saveSupervisor']) !!}
        <!-- Nombre_supervisor Form Input -->
        <div class="form-group">
             {!! Form::label('nombre_supervisor', 'Nombre:') !!}
             {!! Form::text('nombre_supervisor', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Codigo_supervisor Form Input -->
        <div class="form-group">
             {!! Form::label('codigo_supervisor', 'Codigo:') !!}
             {!! Form::text('codigo_supervisor', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Guardar Supervisor', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        <h4>Borrar Operador</h4>
        {!! Form::open(['url' => 'admin/save_users/delSupervisor']) !!}
        <div class="form-group">
             {!! Form::select('id', $data['sup'], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Borrar Supervisor', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        </div>
</div>
<div class="row">
        <div class="col-md-4">
        <h3>Confirmador</h3>
        <h4>Agregar Confirmador</h4>
        {!! Form::open(['url' => 'admin/save_users/saveConfirmador']) !!}
        <!-- Nombre_confirmador Form Input -->
        <div class="form-group">
             {!! Form::label('nombre_confirmador', 'Nombre:') !!}
             {!! Form::text('nombre_confirmador', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Codigo_confirmador Form Input -->
        <div class="form-group">
             {!! Form::label('codigo_confirmador', 'Codigo:') !!}
             {!! Form::text('codigo_confirmador', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Guardar Confirmador', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        <h4>Borrar Confirmador</h4>
        	{!! Form::open(['url' => 'admin/save_users/delConfirmador']) !!}
        	<div class="form-group">
        	     {!! Form::select('id', $data['conf'], null, ['class' => 'form-control']) !!}
        	</div>
        	<!-- Submit Button -->
        	<div class="form-group">
        	    {!! Form::submit('Borrar Confirmador', ['class' => 'btn-primary form-control']) !!}
        	</div>
        	{!! Form::close() !!}
        </div>
        <div class="col-md-4">
        <h3>Plazas</h3>
        <h4>Agregar Plaza</h4>
        {!! Form::open(['url' => 'admin/save_users/savePlaza']) !!}
        <!-- Plaza Form Input -->
        <div class="form-group">
             {!! Form::label('plaza', 'Plaza:') !!}
             {!! Form::text('plaza', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Guardar Plaza', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['url' => 'admin/save_users/delPlaza']) !!}
        <div class="form-group">
             {!! Form::select('id', $data['pla'], null, ['class' => 'form-control']) !!}
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit('Borrar Plaza', ['class' => 'btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
        <div class="col-md-4">
        <h4></h4>
        </div>
</div>


@stop

@section('footer')

@stop
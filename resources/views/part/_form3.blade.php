<div style="width:100%; overflow:scroll">
	<table class="table table-striped">
		<tr align="center">
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
				TARJETA
			</td>
			<td>
			OBSERVACIONES
			</td>
		</tr>
		<tr>
			<td>
			<!-- Nombres1 Form Input -->
			<div class="formFields">
			     {!! Form::text('nombres1', null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<!-- Edad1 Form Input -->
			<div class="formFieldsEdad">
			     {!! Form::text('edad1', null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<!-- Nombres2 Form Input -->
			<div class="formFields">
			     {!! Form::text('nombres2', null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<!-- Edad2 Form Input -->
			<div class="formFieldsEdad">
			     {!! Form::text('edad2', null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<div style="width: 150px">
			     {!! Form::select('estado_civil', $estado_civil, $manifiesto->estado_civil, ['id' => 'tag_list', 'class' => 'form-control']) !!}
				</div>
			</td>
			<td>
			<!-- Tarjetas Form Input -->
			<div class="formFields">
			     {!! Form::text('tarjetas', null, ['id' => 'tarjetas', 'class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<!-- Observaciones Textarea Field -->
			<div class="form-group">
			     {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
			</div>
			</td>
		</tr>
	</table>
</div>
<!-- Submit Button -->
<div class="form-group">
    {!! Form::submit($SubmitButtonText, ['class' => 'btn-primary form-control']) !!}
</div>

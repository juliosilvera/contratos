<div style="width:100%; overflow:scroll">
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
				GERENTE
			</td>
		</tr>
		<tr>
			<td>
			<div style="width: 150px">
			{!! Form::select('sala', $selPlaza, null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
				<input type="text" name="fecha" id="datepicker">
			</td>
			<td>
				<input type="text" name="hora_invitacion">
			</td>
			<td>
				<input type="text" name="nombres1">
			</td>
			<td>
				<input type="text" name="edad1">
			</td>
			<td>
				<input type="text" name="nombres2">
			</td>
			<td>
				<input type="text" name="edad2">
			</td>
			<td>
			<div style="width: 150px">
				<select name="estado_civil" class="form-control">
					<option value="CASADO">CASADO</option>
					<option value="SOLTERO">SOLTERO</option>
					<option value="VIUDO">VIUDO</option>
					<option value="DIVORCIADO">DIVORCIADO</option>
					<option value="UNION LIBRE">UNION LIBRE</option>
					<option value="SEPARADO">SEPARADO</option>
				</select>
				</div>
			</td>
			<td>
				<input type="text" name="telefono_casa1">
			</td>
			<td>
				<input type="text" name="telefono_casa2">
			</td>
			<td>
				<input type="text" name="telefono_celular1">
			</td>
			<td>
				<input type="text" name="telefono_celular2">
			</td>
			<td>
				<input type="text" name="telefono_oficina">
			</td>
			<td>
				<input type="text" name="tarjetas" id="tarjetas">
			</td>
			<td>
			<div style="width: 150px">
			{!! Form::select('fuente', $selFuente, null, ['class' => 'form-control']) !!}
			</div>
			</td>
			<td>
			<div style="width: 150px">
            {!! Form::select('operador', $selOperador, null, ['class' => 'form-control']) !!}
            </div>
			</td>
			<td>
			<div style="width: 150px">
            {!! Form::select('supervisor', $selSupervisor, null, ['class' => 'form-control']) !!}
            </div>
			</td>
			<td>
			<div style="width: 50px">
            {!! Form::select('tipo_cita', ['CT' => 'CT', 'CC' => 'CC', 'R' => 'R', 'SN' => 'SN'], null, ['class' => 'form-control']) !!}
            </div>
			</td>
			<td>
			<div style="width: 150px">
			{!! Form::select('gerente', ['2077' => 'CARLO CUENCA'], null, ['class' => 'form-control']) !!}
			</div>
			</td>
		</tr>
	</table>
</div>
	<!-- Submit Button -->


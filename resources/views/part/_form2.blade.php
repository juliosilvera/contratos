<div class="row">
        <div class="col-md-4">
        <!-- Oficina Form Input -->
        <div class="form-group">
             {!! Form::label('oficina', 'Oficina:') !!}
             {!! Form::text('oficina', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Contrato Form Input -->
        <div class="form-group">
             {!! Form::label('contrato', 'Contrato:') !!}
             {!! Form::text('contrato', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Fecha Form Input -->
        <div class="form-group">
             {!! Form::label('fecha', 'Fecha:') !!}
             {!! Form::text('fecha', null, ['class' => 'datepicker form-control']) !!}
        </div>
        </div>
</div>
      <div class="row">
        <div class="col-md-3">
        <h3>Titular 1</h3>
        <!-- Nombre1 Form Input -->
        <div class="form-group">
             {!! Form::label('nombres1', 'Nombre:') !!}
             {!! Form::text('nombres1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Apellidos1 Form Input -->
        <div class="form-group">
             {!! Form::label('apellidos1', 'Apellidos:') !!}
             {!! Form::text('apellidos1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Ci1 Form Input -->
        <div class="form-group">
             {!! Form::label('ci1', 'C.I.:') !!}
             {!! Form::text('ci1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Email1 Form Input -->
        <div class="form-group">
             {!! Form::label('email1', 'Email:') !!}
             {!! Form::email('email1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Telf_casa1 Form Input -->
        <div class="form-group">
             {!! Form::label('telf_casa1', 'Telefono Casa:') !!}
             {!! Form::text('telf_casa1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Telf_oficina1 Form Input -->
        <div class="form-group">
             {!! Form::label('telf_oficina1', 'Telefono Oficina:') !!}
             {!! Form::text('telf_oficina1', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Celular1 Form Input -->
        <div class="form-group">
             {!! Form::label('celular1', 'Celular:') !!}
             {!! Form::text('celular1', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-3">
        <h3>Titular 2</h3>
        <!-- Nombre1 Form Input -->
                <div class="form-group">
                     {!! Form::label('nombres2', 'Nombre:') !!}
                     {!! Form::text('nombres2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Apellidos1 Form Input -->
                <div class="form-group">
                     {!! Form::label('apellidos2', 'Apellidos:') !!}
                     {!! Form::text('apellidos2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Ci1 Form Input -->
                <div class="form-group">
                     {!! Form::label('ci2', 'C.I.:') !!}
                     {!! Form::text('ci2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Email1 Form Input -->
                <div class="form-group">
                     {!! Form::label('email2', 'Email:') !!}
                     {!! Form::email('email2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Telf_casa1 Form Input -->
                <div class="form-group">
                     {!! Form::label('telf_casa2', 'Telefono Casa:') !!}
                     {!! Form::text('telf_casa2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Telf_oficina1 Form Input -->
                <div class="form-group">
                     {!! Form::label('telf_oficina2', 'Telefono Oficina:') !!}
                     {!! Form::text('telf_oficina2', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Celular1 Form Input -->
                <div class="form-group">
                     {!! Form::label('celular2', 'Celular:') !!}
                     {!! Form::text('celular2', null, ['class' => 'form-control']) !!}
                </div>
        </div>
        <div class="col-md-6">

        </div>
      </div>
<!-- Direccion Form Input -->
<div class="form-group">
     {!! Form::label('direccion', 'Direccion:') !!}
     {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="row">
        <div class="col-md-4">
        <!-- Millas_anio Form Input -->
        <div class="form-group">
             {!! Form::label('millas_anio', 'Millas por Año:') !!}
             {!! Form::text('millas_anio', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Millas_anio_text Form Input -->
        <div class="form-group">
             {!! Form::label('millas_anio_text', 'Millas por Año(Texto):') !!}
             {!! Form::text('millas_anio_text', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Total_millas Form Input -->
        <div class="form-group">
             {!! Form::label('total_millas', 'Total de Millas:') !!}
             {!! Form::text('total_millas', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Num_anios Form Input -->
        <div class="form-group">
             {!! Form::label('num_anios', 'Numero de Años:') !!}
             {!! Form::text('num_anios', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Num_anios_text Form Input -->
        <div class="form-group">
             {!! Form::label('num_anios_text', 'Numero de Años(Texto):') !!}
             {!! Form::text('num_anios_text', null, ['class' => 'form-control']) !!}
        </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
          <!-- Valor_inversion Form Input -->
          <div class="form-group">
               {!! Form::label('valor_inversion', 'Valor Inversión:') !!}
               {!! Form::text('valor_inversion', null, ['class' => 'form-control']) !!}
          </div>
          <!-- Valor_inversion_text Form Input -->
          <div class="form-group">
               {!! Form::label('valor_inversion_text', 'Valor Inversión(Texto):') !!}
               {!! Form::text('valor_inversion_text', null, ['class' => 'form-control']) !!}
          </div>
          </div>
          <div class="col-md-4">
          <!-- Valor_hoy Form Input -->
          <div class="form-group">
               {!! Form::label('valor_hoy', 'Valor Inicial Hoy:') !!}
               {!! Form::text('valor_hoy', null, ['class' => 'form-control']) !!}
          </div>
          </div>
          <div class="col-md-4">
          <!-- Cui Form Input -->
          <div class="form-group">
               {!! Form::label('cui', 'Cui:') !!}
               {!! Form::text('cui', null, ['class' => 'form-control']) !!}
          </div>
          <!-- Cui_text Form Input -->
          <div class="form-group">
               {!! Form::label('cui_text', 'Cui(Texto):') !!}
               {!! Form::text('cui_text', null, ['class' => 'form-control']) !!}
          </div>
          </div>
      </div>
<div class="row">
        <div class="col-md-4">
        <!-- Inicial_pactada_porcentaje Form Input -->
        <div class="form-group">
             {!! Form::label('inicial_pactada_porcentaje', 'Inicial Pactada %:') !!}
             {!! Form::text('inicial_pactada_porcentaje', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Inicial_pactada_valor Form Input -->
        <div class="form-group">
             {!! Form::label('inicial_pactada_valor', 'Inicial Pactada $:') !!}
             {!! Form::text('inicial_pactada_valor', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Valor_hoy_cui Form Input -->
        <div class="form-group">
             {!! Form::label('valor_hoy_cui', 'Valor Hoy + Cui:') !!}
             {!! Form::text('valor_hoy_cui', null, ['class' => 'form-control']) !!}
        </div>
        </div>
</div>
<div class="row">
    <div class="col-md-3">
    <div class="form-group">
         {!! Form::label('forma_pago', 'Forma de Pago:') !!}
         {!! Form::select('forma_pago', ['Contado' => 'Contado', 'Exit' => 'Exit', 'Pending 100' => 'Pending 100', 'Pending 50' => 'Pending 50', 'Procesable' => 'Procesable', 'Reserva' => 'Reserva'], null, ['class' => 'form-control']) !!}
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
         {!! Form::label('con_cui', 'Paga Cui hoy?') !!}
         {!! Form::select('con_cui', ['NO' => 'NO', 'SI' => 'SI'], null, ['class' => 'form-control']) !!}
    </div>
    </div>
    <div class="col-md-6"></div>
</div>
<div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td><b>MONTO USD</td>
                    <td><b>BANCO</td>
                    <td><b>FECHA DE PAGO</td>
                </tr>
                <tr>
                    <td>
                         {!! Form::text('monto1', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('banco1', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('fecha_pago1', null, ['class' => 'datepicker form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                         {!! Form::text('monto2', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('banco2', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('fecha_pago2', null, ['class' => 'datepicker form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                         {!! Form::text('monto3', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('banco3', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('fecha_pago3', null, ['class' => 'datepicker form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                         {!! Form::text('monto4', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('banco4', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('fecha_pago4', null, ['class' => 'datepicker form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                         {!! Form::text('monto5', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('banco5', null, ['class' => 'form-control']) !!}
                    </td>
                    <td>
                    {!! Form::text('fecha_pago5', null, ['class' => 'datepicker form-control']) !!}
                    </td>
                </tr>
</table>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    <!-- Text_valor_restante Form Input -->
    <div class="form-group">
         {!! Form::label('text_valor_restante', 'Texto Valor Restante:') !!}
         {!! Form::text('text_valor_restante', null, ['class' => 'form-control']) !!}
    </div>
    </div>

    <div class="col-md-3">

    </div>
    <div class="col-md-6"></div>
</div>
      <div class="row">
        <div class="col-md-4">
        <!-- Saldo_financiar Form Input -->
        <div class="form-group">
             {!! Form::label('saldo_financiar', 'Saldo a Financiar:') !!}
             {!! Form::text('saldo_financiar', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Saldo_financiar_text Form Input -->
        <div class="form-group">
             {!! Form::label('saldo_financiar_text', 'Saldo a Financiar(Texto):') !!}
             {!! Form::text('saldo_financiar_text', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4">
        <!-- No_cuotas Form Input -->
        <div class="form-group">
             {!! Form::label('no_cuotas', 'No_cuotas:') !!}
             {!! Form::text('no_cuotas', null, ['class' => 'form-control', 'id' => 'no_cuotas']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Fecha_inicio Form Input -->
        <div class="form-group">
             {!! Form::label('fecha_inicio', 'Fecha de Inicio:') !!}
             {!! Form::text('fecha_inicio', null, ['class' => 'datepicker form-control']) !!}
        </div>
        </div>
        <div class="col-md-4">
        <!-- Valor_cuotas Form Input -->
        <div class="form-group">
             {!! Form::label('valor_cuotas', 'Valor de las Cuotas:') !!}
             {!! Form::text('valor_cuotas', null, ['class' => 'form-control', 'id' => 'valor_cuotas']) !!}
        </div>
        </div>
      </div>
<h4>FACTURA</h4>
      <div class="row">
        <div class="col-md-3">
        <!-- Nombre_factura Form Input -->
        <div class="form-group">
             {!! Form::label('nombre_factura', 'Nombre:') !!}
             {!! Form::text('nombre_factura', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Direccion_factura Form Input -->
        <div class="form-group">
             {!! Form::label('direccion_factura', 'Dirección:') !!}
             {!! Form::text('direccion_factura', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-3">
        <!-- Ruc Form Input -->
        <div class="form-group">
             {!! Form::label('ruc', 'Ruc - C.I.:') !!}
             {!! Form::text('ruc', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Telf_factura Form Input -->
        <div class="form-group">
             {!! Form::label('telf_factura', 'Telefono:') !!}
             {!! Form::text('telf_factura', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-6">
        <!-- Observaciones Textarea Field -->
        <div class="form-group">
             {!! Form::label('observaciones', 'Observaciones:') !!}
             {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
        </div>
        </div>
      </div>

<h4>Manifiestos</h4>
      <div class="row">
        <div class="col-md-3">
        <div class="form-group">
             {!! Form::select('manifiesto', $man, null, ['id' => 'tag_list', 'class' => 'form-control']) !!}
        </div>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-3">
        <!-- Submit Button -->
        <div class="form-group">
            {!! Form::submit($SubmitButtonText, ['class' => 'btn-primary form-control']) !!}
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3"></div>
      </div>
</div>
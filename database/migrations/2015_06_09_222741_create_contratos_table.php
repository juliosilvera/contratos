<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('oficina');
            $table->text('contrato');
            $table->text('fecha');
            $table->text('nombres1');
            $table->text('apellidos1');
            $table->text('ci1');
            $table->text('email1');
            $table->text('telf_casa1');
            $table->text('telf_oficina1');
            $table->text('celular1');
            $table->text('nombres2');
            $table->text('apellidos2');
            $table->text('ci2');
            $table->text('email2');
            $table->text('telf_casa2');
            $table->text('telf_oficina2');
            $table->text('celular2');
            $table->text('direccion');
            $table->text('millas_anio');
            $table->text('millas_anio_text');
            $table->text('num_anios');
            $table->text('num_anios_text');
            $table->text('total_millas');
            $table->text('valor_inversion');
            $table->text('valor_inversion_text');
            $table->text('valor_hoy');
            $table->text('cui');
            $table->text('cui_text');
            $table->text('con_cui');
            $table->text('inicial_pactada_porcentaje');
            $table->text('inicial_pactada_valor');
            $table->text('valor_cui_hoy');
            $table->text('forma_pago');
            $table->text('con_sin_interes');
            $table->text('monto1');
            $table->text('banco1');
            $table->text('fecha_pago1');
            $table->text('monto2');
            $table->text('banco2');
            $table->text('fecha_pago2');
            $table->text('monto3');
            $table->text('banco3');
            $table->text('fecha_pago3');
            $table->text('monto4');
            $table->text('banco4');
            $table->text('fecha_pago4');
            $table->text('monto5');
            $table->text('banco5');
            $table->text('fecha_pago5');
            $table->text('saldo_financiar');
            $table->text('saldo_financiar_text');
            $table->text('valor_restante_text');
            $table->text('no_cuotas');
            $table->text('valor_cuotas');
            $table->text('fecha_inicio');
            $table->text('nombre_factura');
            $table->text('ruc');
            $table->text('direccion_factura');
            $table->text('telf_factura');
            $table->text('observaciones');
            $table->text('manifiesto');
            $table->text('creado_por');
            $table->text('modificado_por');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contratos');
	}

}

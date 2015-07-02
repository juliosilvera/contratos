<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManifiestosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manifiestos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('sala');
            $table->text('fecha');
            $table->text('hora_invitacion');
            $table->text('nombres1');
            $table->text('edad1');
            $table->text('nombres2');
            $table->text('edad2');
            $table->text('estado_civil');
            $table->text('telefono_casa1');
            $table->text('telefono_casa2');
            $table->text('telefono_celular1');
            $table->text('telefono_celular2');
            $table->text('telefono_oficina');
            $table->text('tarjetas');
            $table->text('fuente');
            $table->text('operador');
            $table->text('supervisor');
            $table->text('tipo_cita');
            $table->text('tele_closer');
            $table->text('opciones_tele_closer');
            $table->text('gerente');
            $table->text('hora_entrada');
            $table->text('calificacion');
            $table->text('liner');
            $table->text('closer1');
            $table->text('closer2');
            $table->text('closer3');
            $table->text('observaciones');
            $table->text('creado_por');
            $table->text('fecha_creado');
            $table->text('modificado_por');
            $table->text('confirmado');
            $table->text('confirmado_por');
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
        Schema::drop('manifiestos');
    }


}

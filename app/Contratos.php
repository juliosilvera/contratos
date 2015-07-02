<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model {

	//
    protected $fillable = [
        'oficina',
        'contrato',
        'fecha',
        'nombres1',
        'apellidos1',
        'ci1',
        'email1',
        'telf_casa1',
        'telf_oficina1',
        'celular1',
        'nombres2',
        'apellidos2',
        'ci2',
        'email2',
        'telf_casa2',
        'telf_oficina2',
        'celular2',
        'direccion',
        'millas_anio',
        'millas_anio_text',
        'num_anios',
        'num_anios_text',
        'total_millas',
        'valor_inversion',
        'valor_inversion_text',
        'valor_hoy',
        'cui',
        'cui_text',
        'con_cui',
        'inicial_pactada_porcentaje',
        'inicial_pactada_valor',
        'valor_cui_hoy',
        'forma_pago',
        'con_sin_interes',
        'monto1',
        'banco1',
        'fecha_pago1',
        'monto2',
        'banco2',
        'fecha_pago2',
        'monto3',
        'banco3',
        'fecha_pago3',
        'monto4',
        'banco4',
        'fecha_pago4',
        'monto5',
        'banco5',
        'fecha_pago5',
        'saldo_financiar',
        'saldo_financiar_text',
        'valor_restante_text',
        'no_cuotas',
        'valor_cuotas',
        'fecha_inicio',
        'nombre_factura',
        'ruc',
        'direccion_factura',
        'telf_factura',
        'observaciones',
        'manifiesto',
        'creado_por',
        'modificado_por'
    ];

    public function scopeFiltro($query, $request)
    {

        return $query->where($request);
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifiestos extends Model {

	//
    protected $fillable = [
        'sala',
        'fecha',
        'hora_invitacion',
        'nombres1',
        'edad1',
        'nombres2',
        'edad2',
        'estado_civil',
        'telefono_casa1',
        'telefono_casa2',
        'telefono_celular1',
        'telefono_celular2',
        'telefono_oficina',
        'tarjetas',
        'fuente',
        'operador',
        'supervisor',
        'tipo_cita',
        'tele_closer',
        'opciones_tele_closer',
        'gerente',
        'hora_entrada',
        'calificacion',
        'liner',
        'closer1',
        'closer2',
        'closer3',
        'observaciones',
        'creado_por',
        'fecha_creado',
        'modificado_por',
        'confirmado',
        'confirmado_por'
    ];


    public function scopeFechaCreado($query, $request)
    {

        return $query->where($request->input());
    }

    public function scopeBusqueda($query, $request)
        {
            return $query->where($request);
        }


    public function CallManifiestos()
        {
            $man = [];
            foreach ($this->all() as $value) {
                $id = $value->id;
                $content = $value->sala . " / " . $value->fecha . " / " . $value->nombres1;
                $man += [
                    $id => $content,
                ];
            }
            return $man;
        }


}

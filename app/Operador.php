<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model {

	//

    protected $fillable = [
      'nombre_operador',
        'codigo_operador'
    ];

    public function loadOperador()
    {
        $send = [];
        $data = $this->all();
        foreach ($data as $d){
            $send += [
                $d->codigo_operador => $d->nombre_operador,
            ];
        }
        return $send;
    }

}

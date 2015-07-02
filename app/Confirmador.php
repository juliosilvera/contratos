<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmador extends Model {

    protected $fillable = [
        'nombre_confirmador',
        'codigo_confirmador'
    ];

	//
    public function loadConfirmador()
        {
            $send = [];
            $data = $this->all();
            foreach ($data as $d){
                $send += [
                  $d->codigo_confirmador => $d->nombre_confirmador,
                ];
            }
            return $send;
        }

}

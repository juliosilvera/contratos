<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuente extends Model {

	//

    protected $fillable = [
        'codigo',
        'activo'
    ];

    public function loadFuente()
    {
        $send = [];
        $data = $this->all();
        foreach ($data as $d){
            $send += [
                $d->codigo => $d->codigo,
            ];
        }
        return $send;
    }

}

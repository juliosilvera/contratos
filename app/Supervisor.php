<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model {

    protected $fillable = [
      'codigo_supervisor',
        'nombre_supervisor'
    ];

	//

    public function loadSupervisor()
    {
        $send = [];
        $data = $this->all();
        foreach ($data as $d){
            $send += [
                $d->codigo_supervisor => $d->nombre_supervisor,
            ];
        }
        return $send;
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model {

	//

    public function setTextToShow()
        {
            $datos = [
                'dato1' => 'Dato 1',
                'dato2' => 'Dato 2',
                'dato3' => 'Dato 3'
            ];
            return $datos;
        }

}

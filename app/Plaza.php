<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaza extends Model {

    protected $fillable = [
        'plaza'
    ];

	//

    public function loadPlaza()
    {
        $send = [];
        $data = $this->all();
        foreach ($data as $d){
            $send += [
                $d->plaza => $d->plaza,
            ];
        }
        return $send;
    }

}

<?php namespace App;



use App\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model {

    public function selData()
        {

            $selManifiestos = [];
            $selReportes = [];


            foreach (Manifiestos::all() as $man){
                $selManifiestos += [
                    $man->fecha_creado => $man->fecha_creado,
                ];
                $selReportes += [
                    $man->fecha => $man->fecha,
                ];
            }

            $data = [
              'manifiestos' => $selManifiestos,
                'reportes' => $selReportes
            ];


            return $data;
        }

    public function repManifiestos($request)
        {
            unset($request['_token']);
            $manifiestos = DB::table('manifiestos')->whereBetween('fecha_creado', [$request['desde'], $request['hasta']])->get();
            return $manifiestos;
        }

    public function usersData()
        {
            $ops = [];
            $fue = [];
            $sup = [];
            $conf = [];
            $pla = [];
            $operadoes = Operador::all();
            foreach ($operadoes as $op){
                $ops += [
                    $op->id => $op->nombre_operador,
                ];
            }
            $fuentes = Fuente::all();
            foreach ($fuentes as $fuente){
                $fue += [
                    $fuente->id => $fuente->codigo,
                    ];
            }
            $supervisores = Supervisor::all();
            foreach($supervisores as $supervisor){
                $sup += [
                  $supervisor->id => $supervisor->nombre_supervisor,
                ];
            }
            $confirmadores = Confirmador::all();
            foreach ($confirmadores as $confirmador){
                $conf += [
                  $confirmador->id => $confirmador->nombre_confirmador,
                ];
            }
            $plazas = Plaza::all();
            foreach ($plazas as $plaza){
                $pla += [
                  $plaza->id => $plaza->plaza,
                ];
            }
            $return = [
                'ops' => $ops,
                'fue' => $fue,
                'sup' => $sup,
                'conf' => $conf,
                'pla' => $pla
            ];

            return $return;
        }

    public function gerMercadeo($table, $request)
        {
            $id = $request->input('id');
            switch ($table)
            {
                case 'saveOperador':
                    $operador = new Operador($request->all());
                    $operador->save();
                    break;

                case 'delOperador':
                    Operador::destroy($id);
                    break;

                case 'saveFuente':
                    $fuente = new Fuente($request->all());
                    $fuente->save();
                    break;

                case 'delFuente':
                    Fuente::destroy($id);
                    break;

                case 'saveSupervisor':
                    $supervisor = new Supervisor($request->all());
                    $supervisor->save();
                    break;

                case 'delSupervisor':
                    Supervisor::destroy($id);
                    break;

                case 'saveConfirmador':
                    $confirmador = new Confirmador($request->all());
                    $confirmador->save();
                    break;

                case 'delConfirmador':
                    Confirmador::destroy($id);
                    break;

                case 'savePlaza':
                    $plaza = new Plaza($request->all());
                    $plaza->save();
                    break;

                case 'delPlaza':
                    Plaza::destroy($id);
                    break;

            }
        }


}

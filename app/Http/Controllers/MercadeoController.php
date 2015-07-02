<?php namespace App\Http\Controllers;

use App\Fuente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manifiestos;
use App\Operador;
use App\Plaza;
use App\Supervisor;
use Illuminate\Http\Request;

class MercadeoController extends Controller {

    public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('userMercadeo');
        }


    /**
     * @param Manifiestos $manifiestos
     * @param Operador $operador
     * @return \Illuminate\View\View
     */
    public function index(Manifiestos $manifiestos, Operador $operador, Supervisor $supervisor, Plaza $plaza, Fuente $fuente)
        {

            $menu = [
                'Salir' => '/auth/logout'

            ];
            $selOperador = $operador->loadOperador();
            $selSupervisor = $supervisor->loadSupervisor();
            $selPlaza = $plaza->loadPlaza();
            $selFuente = $fuente->loadFuente();
            $mostrar = $manifiestos->all();
            return view('mercadeo.user', compact('menu', 'selOperador', 'selSupervisor', 'selPlaza', 'selFuente', 'mostrar'));
        }

    public function store(Request $request)
        {
            $manifiesto = new Manifiestos($request->all());

            $manifiesto->save();

            return redirect('mercadeo');
        }
}

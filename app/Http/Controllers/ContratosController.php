<?php namespace App\Http\Controllers;

use App\Contratos;
use App\Fuente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manifiestos;

use App\Operador;
use App\Plaza;
use App\Supervisor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Thujohn\Pdf\Pdf;


class ContratosController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userContratos');

    }

    public $menu = [
        'Volver' => '/contratos',
        'Nuevo' => '/contratos/create',
        'Cargar Manifiestos' => '/contratos/manifiestos',
        'Ver Contratos Cargados' => '/contratos/show',
        'Salir' => '/auth/logout'
    ];

    public function index()
        {
            $menu = $this->menu;
            return view('contratos.user', compact('menu'));
        }

    public function show(Contratos $contratos, Request $request)
        {
            $contrato = $contratos->filtro($request->all())->get();



            $menu = $this->menu;


            return view('contratos.show', compact('menu', 'contrato'));
        }

    public function store(Request $request)
        {
            $contrato = new Contratos($request->all());

            $contrato->save();

            return redirect('/contratos');
        }

    public function edit($id, Operador $operador, Supervisor $supervisor, Plaza $plaza, Fuente $fuente)
        {
            $menu = $this->menu;

            $selOperador = $operador->loadOperador();
            $selSupervisor = $supervisor->loadSupervisor();
            $selPlaza = $plaza->loadPlaza();
            $selFuente = $fuente->loadFuente();

            $estado_civil = [
                'CASADO' => 'CASADO',
                'SOLTERO' => 'SOLTERO',
                'VIUDO' => 'VIUDO',
                'DIVORCIADO' => 'DIVORCIADO',
                'UNION LIBRE' => 'UNION LIBRE',
                'SEPARADO' => 'SEPARADO'
            ];

            $manifiesto = Manifiestos::findOrFail($id);

            return view('contratos.edit', compact('menu', 'manifiesto', 'selOperador', 'selSupervisor', 'selPlaza', 'selFuente', 'estado_civil'));
        }

    public function update($id, Request $request)
        {
            $contrato = Contratos::findOrFail($id);

            $contrato->update($request->all());

            return redirect('/contratos');
        }

    public function create(Manifiestos $manifiestos)
        {
            $menu = $this->menu;
            $man = $manifiestos->CallManifiestos();
            return view('contratos.nuevo_contrato', compact('menu', 'man'));
        }

    public function borrar($id)
        {
            Contratos::destroy($id);
            return redirect('/contratos/show');
        }

    public function imprimir($id)
        {
            $menu = $this->menu;
            $contrato = "contado";
            return view('contratos.imprimir', compact('id', 'menu', 'contrato'));
        }

    public function manifiestos()
        {
            $busqueda = ['fecha' => Carbon::now()->format('Y-m-d')];
            $menu = $this->menu;
            $valores = Manifiestos::where($busqueda)->get();
            return view('contratos.manifiestos', compact('menu', 'valores'));
        }
}

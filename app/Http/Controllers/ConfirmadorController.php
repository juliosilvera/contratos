<?php namespace App\Http\Controllers;

use App\Fuente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manifiestos;
use App\Operador;
use App\Plaza;
use App\Supervisor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmadorController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userConfirmador');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Operador $operador, Supervisor $supervisor, Plaza $plaza, Fuente $fuente)
	{
        $menu = [
            'Salir' => '/auth/logout'

        ];
        date_default_timezone_set('America/Guayaquil');
        $manifiestos = Manifiestos::where(['confirmado' => 'false', 'fecha' => date('Y-m-d')])->orderBy('sala', 'asc')->get();
        $confirmados = Manifiestos::where(['confirmado' => 'true', 'fecha' => date('Y-m-d')])->orderBy('sala', 'asc')->get();
        $selOperador = $operador->loadOperador();
        $selSupervisor = $supervisor->loadSupervisor();
        $selPlaza = $plaza->loadPlaza();
        $selFuente = $fuente->loadFuente();


		return view('confirmador.user', compact('menu', 'manifiestos', 'selOperador', 'selSupervisor', 'selPlaza', 'selFuente', 'confirmados'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{

        $update = Manifiestos::findOrFail($id);
        $update['confirmado'] = 'true';
        $update['confirmado_por'] = Auth::user()->name;

        $update->update($request->all());

        return redirect('confirmador');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

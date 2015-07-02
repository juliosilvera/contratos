<?php namespace App\Http\Controllers;

use App\Admin;
use App\Fuente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manifiestos;
use App\Operador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userAdmin');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Admin $admin, $slug)
	{
        $manifiestos = $admin->selData();

        $menu = [

            'Salir' => '/auth/logout'
        ];
		return view('admin.'.$slug, compact('menu', 'manifiestos'));
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
	public function update($id)
	{
		//
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

    public function showRepManifiestos($route, Admin $admin, Request $request)
    {
        $data = $admin->repManifiestos($request);
        $fecha = ['desde' => $request['desde'], 'hasta' => $request['hasta']];
        $dataContratos = DB::table('contratos')->whereBetween('fecha', array($request['desde'], $request['hasta']))->get();
        $menu = [
            'Volver' => '/admin/mercadeo',
            'Salir' => '/auth/logout'
        ];
        return view('admin.'. $route, compact('menu', 'data', 'fecha', 'dataContratos'));

    }

    public function usuariosMercadeo(Admin $admin)
        {
            $data = $admin->usersData();
            //dd($data);
            $menu = [
                'Volver' => '/admin/mercadeo',
                'Salir' => '/auth/logout'
            ];
            return view('/admin/gerMer_usuarios', compact('menu', 'data'));
        }

    public function SaveUsers($table, Admin $admin, Request $request)
        {
            $admin->gerMercadeo($table, $request);
            return redirect('/admin/gerMer_usuarios');
        }


}

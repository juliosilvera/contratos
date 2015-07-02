<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pruebas;
use Illuminate\Http\Request;

class PagesController extends Controller {

	//

    public function index()
        {
            return view('principal');
        }

    public function show($slug, Pruebas $pruebas)
        {
            $datos = $pruebas->setTextToShow();
            return view('page.'.$slug, compact('datos'));
        }

}

<?php namespace App\Http\Controllers;

use App\User;
use Ignited\Pdf\Facades\Pdf;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        switch (Auth::user()->type)
        {
            case 'userMercadeo':
                return redirect('/mercadeo');
                break;

            case 'superAdmin':
                return redirect('/admin/mercadeo');
                break;
        }
	}

    public function testPDF()
        {
            $pdf = PDF::make();
            $pdf->addPage('<html><head></head><body><b>Hello World</b></body></html>');
            $pdf->send();
        }

}

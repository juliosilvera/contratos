<?php namespace App\Http\Middleware;

use App\Http\Requests\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class userMercadeo {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        switch (Auth::user()->type)
        {
            case 'userMercadeo':
                return $next($request);
                break;
            case 'superAdmin':
                return $next($request);
                break;
            default:
                return redirect('/home');
                break;
        }
	}

}

<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userContratos {

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
            case 'userContratos':
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

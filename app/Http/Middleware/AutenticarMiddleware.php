<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticarMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $logout): Response
    {

        session_start();

        if($logout == 'logout'){
            // session_start();
            session_destroy();
            return redirect()->route('login');
        }

        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){

            return $next($request);
        }

        return redirect()->route('login', ['erro' => 2]);
    }
}

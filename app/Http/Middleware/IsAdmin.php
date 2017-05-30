<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Condition qui va vérifier si le slug de l'utilisateur et différent d'admin
         * @return il redirige vers la route home si cette condition est respecter.
         */
        if(Auth::user()->roles->implode('slug') !== 'admin')
        {
            return redirect('/home');
        }
        /**
         * @return vers le reste de la resquest du controller si l'utilisateur est admin
         */
        return $next($request);

        /**
         * @todo Oublier pas d'inserer votre middleware dans le Kernel.php dans la var routeMiddleware
         */
    }
}

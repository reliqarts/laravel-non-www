<?php 

namespace ReliQArts\NonWWW\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;

/**
 * NonWWW
 * Redirects any www requests to non-www counterparts.
 *
 * @param request The request object.
 * @param $next The next closure.
 * @return redirects to the secure counterpart of the requested uri.
 */
class NonWWW
{
    public function handle($request, Closure $next)
    {
        if (substr($request->header('host'), 0, 4) == 'www.') {
            $request->setTrustedProxies([$request->getClientIp()], config('trustedproxy.headers'));
            $request->headers->set('host', parse_url(config('app.url'), PHP_URL_HOST));
            return redirect($request->getRequestUri(), 301);
        }

        return $next($request);
    }
}

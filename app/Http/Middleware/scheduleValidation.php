<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class scheduleValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $page = $request->route()->getName();
        
        if (auth()->guard('caas')->user()->status->isPass) {
            if(!boolval(auth()->guard('caas')->user()->announcecheck()->isPlotActive)&& !boolval(auth()->guard('caas')->user()->plots)){
                return redirect()->route('caas.dashboard');
            }
            if ($page == 'caas.schedule' && boolval(auth()->guard('caas')->user()->plots) == 1) {
                return redirect()->route('caas.fix.schedule');
            }
            if($page == 'caas.fix.schedule' && !boolval(auth()->guard('caas')->user()->plots)){
                return redirect()->route('caas.schedule');
            }
        }
        else {
            return redirect()->route('caas.dashboard');
        }
        return $next($request);
    }
}

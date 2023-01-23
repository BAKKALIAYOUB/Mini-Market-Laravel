<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Client;

class AuthentificationUser
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
        if($request->Email !=null){
            $client = Client::where('Email' , $request->Email)->first();
            if($client == null){
                return $next($request);
            }else{
                return redirect()->route('login');
            }
        }
        return redirect()->route('login')->withErrors(['Email' => 'The email provided does not match any records in our system']);

        

        
    }
}

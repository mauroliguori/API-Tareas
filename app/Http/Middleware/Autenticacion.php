<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Autenticacion
{
    public function handle(Request $request, Closure $next)
    {

        

        $tokenHeader = [
            "Authorization" => $request -> header("Authorization"),
            "Accept" => "application/json",
            "Content-Type" => "application/json"
        ];

        $response = Http::withHeaders($tokenHeader) -> get ( "api-oauth.tareas-namespace.svc.cluster.local/api/v1/validate");
        if($response -> successful()){
            return $next($request);
        }
        return response(["message" => "No autorizado"], 401);
    }
}

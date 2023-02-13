<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index(){
 
        $response = Http::get('https://swapi.dev/api/planets/');

        return response()->json($response->json(), $response->status());
    }
    
    public function indexPage($page){

        $query = 'https://swapi.dev/api/planets/?page='.$page;

        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }

    public function search($search){
        $query = 'https://swapi.dev/api/planets/?search='.$search;
        
        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
}

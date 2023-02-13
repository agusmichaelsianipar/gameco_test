<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function index(){
 
        $response = Http::get('https://swapi.dev/api/starships/');

        return response()->json($response->json(), $response->status());
    }
    
    public function indexPage($page){

        $query = 'https://swapi.dev/api/starships/?page='.$page;

        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
    
    public function search($search){
        $query = 'https://swapi.dev/api/starships/?search='.$search;
        
        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
}

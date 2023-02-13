<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ApiKeyMiddleware;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
 
        $response = Http::get('https://swapi.dev/api/films/');

        return response()->json($response->json(), $response->status());
    }

    public function indexPage($page){

        $query = 'https://swapi.dev/api/films/?page='.$page;

        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }

    public function search($search){
        $query = 'https://swapi.dev/api/films/?search='.$search;
        
        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }

}

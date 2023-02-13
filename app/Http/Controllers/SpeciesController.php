<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function index(){
 
        $response = Http::get('https://swapi.dev/api/species/');

        return response()->json($response->json(), $response->status());
    }
    
    public function indexPage($page){

        $query = 'https://swapi.dev/api/species/?page='.$page;

        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }

    public function search($search){
        $query = 'https://swapi.dev/api/species/?search='.$search;
        
        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
}

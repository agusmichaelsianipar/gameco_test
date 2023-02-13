<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
 
        $response = Http::withHeaders([
            'api-key' => '12345678',
        ])->get('https://swapi.dev/api/vehicles/');

        return response()->json($response->json(), $response->status());
    }
    
    public function indexPage($page){

        $query = 'https://swapi.dev/api/vehicles/?page='.$page;

        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
    
    public function search($search){
        $query = 'https://swapi.dev/api/vehicles/?search='.$search;
        
        $response = Http::get($query);

        return response()->json($response->json(), $response->status());
    }
}

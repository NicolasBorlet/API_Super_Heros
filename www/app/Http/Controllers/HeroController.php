<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class HeroController extends Controller
{
    public function index($id){

        $response = Http::get('https://superheroapi.com/api/291843323012035/'.$id);
        $data = $response->json();
        dd($data);

        echo('Hero #'.$id);
    }
}

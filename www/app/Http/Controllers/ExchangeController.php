<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class ExchangeController extends Controller
{
    public function index(){

        $response = Http::get('https://api.coinlore.net/api/exchanges/');
        $exchanges = $response->json();

        return view('Exchange',[
            'exchanges' => $exchanges['results']
            ]);
    }
}

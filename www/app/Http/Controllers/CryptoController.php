<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    public function index(){
        $response = Http::get('https://api.coinlore.net/api/coin/markets/?id=90');
        $markets = $response->json();

        return view('market', [
            'markets' => $markets
        ]);
    }
}

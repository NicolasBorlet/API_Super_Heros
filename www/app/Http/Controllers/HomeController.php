<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function index(){
        $response = Http::get('https://api.coinlore.net/api/tickers/');
        $cryptos = $response->json();

        return view('home', [
            'cryptos' => $cryptos['data']
        ]);
    }



    public function form(Request $request){
        $crypto_name = ($request->crypto_name);
        $slug = Str::slug($crypto_name, '');

        $response = Http::get('https://api.coinlore.net/api/tickers/'.$slug);
        $cryptos = $response->json();

        return view('Cryptos', [
            'cryptos' => $cryptos['results']
        ]);

    }
}

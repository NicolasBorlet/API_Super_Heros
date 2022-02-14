<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){

        $id=1;
        $title = Str::of('Liste Super-héros')->ucfirst();

        $response = Http::get('https://superheroapi.com/api/291843323012035/'.$id);
        $heroes = $response->json();
        return view('home',[
            'title' => $title,
            'heroes' => $heroes['name']
            ]);
    }

    public function form (Request $request){
        $hero_name = ($request->hero_name);
        $slug = Str::slug($hero_name, '_');

        $response = Http::get('https://superheroapi.com/api/291843323012035/1');
        $heroes = $response->json();

        return view ('Hero',[
           'heroes'=>$heroes['result']
        ]);
    }

}

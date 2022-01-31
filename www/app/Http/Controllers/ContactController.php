<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{

    public function index(){
        $title = Str::of('contact')->ucfirst();
        $slug = Str::of('page de contact')->slug('-');

        return view('contact', [
            'title' => $title,
            'slug' => $slug,
        ]);
    }

    public function form(Request $request) {
        dd($request->firstname);
    }

}

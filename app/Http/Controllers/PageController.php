<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //$name = 'Gianmarco';
        //dd($name);
        return view('homepage')->name('homepage');
    }
}

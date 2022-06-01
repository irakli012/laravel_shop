<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return '<h1> about page</h1>';
    }

    public function contact()
    {
        return '<h1>contact</h1>';
    }
}

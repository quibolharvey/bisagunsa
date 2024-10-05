<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');  // This will load the 'home.blade.php' view from the resources/views folder
    }
}

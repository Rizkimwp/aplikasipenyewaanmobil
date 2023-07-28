<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Ganti "home" dengan nama view untuk halaman home Anda
    }
}


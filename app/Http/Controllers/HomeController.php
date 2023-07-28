<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('dashboard.home'); // Ganti "home" dengan nama view untuk halaman home Anda

    }

}


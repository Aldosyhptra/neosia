<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NeosiaController extends Controller
{
    // Method index
    public function index()
    {
        // Misalnya menampilkan view 'neosia.index'
        return view('index');
    }
}

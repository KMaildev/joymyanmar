<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::all();
        return view('welcome', compact('galleries'));
    }
}

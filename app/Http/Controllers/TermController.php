<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index(Request $request)
    {
        return view('term.index');
    }
}

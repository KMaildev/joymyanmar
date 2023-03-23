<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendingProcessController extends Controller
{
    public function index(Request $request)
    {
        return view('sending_process.index');
    }
}

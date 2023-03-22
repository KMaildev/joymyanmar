<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationCenterController extends Controller
{
    public function index(Request $request)
    {
        return view('education_center.index');
    }
}

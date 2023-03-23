<?php

namespace App\Http\Controllers;

use App\Models\TrainingGallery;
use Illuminate\Http\Request;

class EducationCenterController extends Controller
{
    public function index(Request $request)
    {
        $training_galleries = TrainingGallery::all();
        return view('education_center.index', compact('training_galleries'));
    }
}

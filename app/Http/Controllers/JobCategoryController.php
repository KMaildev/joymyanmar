<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Models\SendingList;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index(Request $request)
    {
        $job_categories = JobCategory::all();
        $sending_lists = SendingList::all();
        return view('job_category.index', compact('job_categories', 'sending_lists'));
    }
}

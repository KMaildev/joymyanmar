<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationCenterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SendingProcessController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('terms', TermController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('news', NewsController::class);
Route::resource('education_center', EducationCenterController::class);
Route::resource('sending_process', SendingProcessController::class);
Route::resource('job_category', JobCategoryController::class);
Route::resource('about', AboutController::class);



Route::get('en', [LangController::class, 'lang_eng'])->name('en');
Route::get('jp', [LangController::class, 'lang_jp'])->name('jp');

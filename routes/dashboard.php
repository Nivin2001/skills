<?php
use App\http\Controllers\CatController;
use App\http\Controllers\DashBoardController;
use Illuminate\Support\Facades\Route;
// معناه لما اطلب هاد الرابط وديني ع هاد الكونترولر
Route::resource('dashboard/cats',CatController::class);
Route::get('/dashboard', [DashBoardController::class,'index'])
->middleware(['auth'])
->name('Dashboard');


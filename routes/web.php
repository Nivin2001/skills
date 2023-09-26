<?php

use App\Http\Controllers\ContactController;
use App\Models\cat;
use App\Models\skills;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\web\CatController;
use App\Http\Controllers\Web\ExamController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SkillController;
use Illuminate\Support\Facades\Route;
//|--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cat/show/{id}', [CatController::class, 'show'])->name('cat.show');
Route::get('/skills/show/{id}',[SkillController::class,'show'])->name('skills.show');
Route::get('exams/start/{id}',[ExamController::class,'start'])->middleware('auth','verified');
Route::get('exams/submit/{id}',[ExamController::class,'start'])->middleware('auth','verified');
Route::get('/exams/show/{id}',[ExamController::class,'show'])->name('exams.show');
Route::get('/exams/questions/{id}',[ExamController::class,'questions'])->name('exam.questions');

// Route::get('/contact',[ContactController::class,'index'])->name('contact.create');

// Route::get('/contact/message',[ContactController::class,'send'])->name('contact.store');



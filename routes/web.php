<?php

use App\Http\Controllers\Web\ContactController;
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
// Route::get('/', function () {
//     return view('welcome');
// }) ->name('home') ->middleware('auth');


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cat/show/{id}', [CatController::class, 'show'])->name('cat.show');
// ->middleware('auth');
// ->middleware('verified');
Route::get('/skills/show/{id}',[SkillController::class,'show'])->name('skills.show');
Route::get('/exams/show/{id}',[ExamController::class,'show'])->name('exams.show');
Route::post('exams/start/{id}',[ExamController::class,'start'])->name('exam.start')->middleware('auth','student');
Route::post('exams/submit/{id}',[ExamController::class,'start'])->name('exam.submit')->middleware('auth','verified','student');


Route::get('/exams/questions/{id}',[ExamController::class,'questions'])->name('exam.questions')->middleware('auth','student');
;

Route::get('/contact',[ContactController::class,'index'])->name('contact.create');

Route::post('/contact/message',[ContactController::class,'send'])->name('contact.store');

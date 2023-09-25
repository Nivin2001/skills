<?php
use App\Http\Controllers\Dashboard\DashBoardController; // Correct the namespace capitalization
use App\Http\Controllers\Dashborad\CatsController;
use Illuminate\Support\Facades\Route;




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Rest of your routes...

// معناه لما اطلب هاد الرابط وديني ع هاد الكونترولر
Route::get('/dashboard/cats/archive',[CatsController::class, 'archive'])->name('cats.archive');
Route::get('/dashboard/cats/restore/{id}', [CatsController::class, 'restore'])->name('cats.restore');
Route::get('/dashboard/cats/force/{id}', [CatsController::class, 'force'])->name('cats.force');
Route::resource('dashboard/cats', CatsController::class);



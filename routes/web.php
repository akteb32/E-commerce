<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('frontend.auth.forgot-password');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


// -- backend Route -- //

// // -- dashboard Route -- //
// Route::get('/admin', action: [dashboardcontroller::class,'index']);
       
// -- Category Route -- //
// Route::get('/category', action: [CategoryController::class,'index'])->name('category.index');
// Route::get('/category-create', [CategoryController::class,'create']);
// Route::post('/category-store', [CategoryController::class,'store'])->name('category.store');
// Route::get('/category-edit/{category}', [CategoryController::class,'edit']);
// Route::put('/category-update/{category}', [CategoryController::class,'update'])->name('category.update');
// Route::delete('/category-delete/{category}', [CategoryController::class,'destroy'])->name('category.delete');// -- Category Route --

 


});

require __DIR__.'/auth.php';




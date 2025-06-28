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














// Test Route


Route::get('/home-page', function () {
    return view('frontend.home');
});
Route::get('/checkout', function () {
    return view('frontend.pages.cart.checkout');
});
Route::get('/cart', function () {
    return view('frontend.pages.cart.index');
});
Route::get('/show-order', function () {
    return view('frontend.pages.order.show');
});
Route::get('/index-order', function () {
    return view('frontend.pages.order.index');
});

Route::get('/single-product', function () {
    return view('frontend.pages.product.single-product');
});
Route::get('/edit-profile', function () {
    return view('frontend.pages.profile.edit');
});
Route::get('/address', function () {
    return view('frontend.pages.address.index');
});
Route::get('/editaddress', function () {
    return view('frontend.pages.address.edit');
});
<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\ProfileController;
use Faker\Guesser\Name;
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
    return view('frontend\home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


// -- backend Route -- //
Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// // -- dashboard Route -- //

    // -- user Route -- //
Route::prefix('user')->group(function () {

    });

    // -- Category Route -- //
Route::prefix('category')->group(function () {
    
        Route::get('/category', action: [CategoryController::class,'index'])->name('category.index');
        Route::get('/category-create', [CategoryController::class,'create']);

    });
 
});





// -- frontend Route -- //
Route::prefix('user')->middleware(['auth','role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});




































// Test user pages
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
Route::get('/editprofile', function () {
    return view('frontend.pages.profile.edit');
});
Route::get('/confirm-password-frontend-show', function () {
    return view('frontend.auth.confirm-password-frontend');
});
Route::get('/login-frontend', function () {
    return view('frontend.auth.login-frontend');
});
Route::get('/register-frontend', function () {
    return view('frontend.auth.register-frontend');
});

// Test admin pages
Route::get('/backmaster', function () {
    return view('backend.layouts.backmaster');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashbord.admin');
Route::get('/authlogin', function () {
    return view('backend.auth.login-backend');
});
Route::get('/authmaster', function () {
    return view('backend.auth.layouts.authmaster');
});
Route::get('/register-backend', function () {
    return view('backend.auth.register-backend');
});
Route::get('/reset-password', function () {
    return view('backend.auth.reset-password-backend');
});
Route::get('/forgot-password', function () {
    return view('backend.auth.forgot-password-backend');
});
Route::get('/verify-email', function () {
    return view('backend.auth.verify-email-backend');
});
Route::get('/confirmpass', function () {
    return view('backend.auth.confirm-password-backend');
});
Route::get('/password-conf', function () {
    return view('auth.confirm-password');
});
Route::get('/register-backend', function () {
    return view('backend.auth.register-backend');
});
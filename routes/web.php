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
    return view('welcome');
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


    // -- user Route -- //
    Route::prefix('user')->group(function () {

    });

    // -- Category Route -- //
    Route::prefix('category')->group(function () {

    });



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




// Test admin pages


Route::get('/backmaster', function () {
    return view('backend.layouts.backmaster');
});


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashbord.admin');


Route::get('/authlogin', function () {
    return view('backend.auth.auth-login');
})
;

<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SubcategoryController;
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
    return view('frontend/home');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard-backend');
})->name('dashbord.admin');
// ->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';



Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category_edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category_update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category-delete/{category}', [CategoryController::class,'destroy'])->name('category.delete');



Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategory_create', [SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('/subcategory_store', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('/subcategory_edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('/subcategory_update/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategory.update');
Route::delete('/subcategory-delete/{subcategory}', [SubcategoryController::class,'destroy'])->name('subcategory.delete');



Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product_create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product_store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product_edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product_update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product-delete/{product}', [ProductController::class,'destroy'])->name('product.delete');




// -- backend Route -- //
// Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// // // -- dashboard Route -- //

//     // -- user Route -- //
// Route::prefix('user')->group(function () {

//     });

//     // -- Category Route -- //
// Route::prefix('ca')->group(function () {


//     });

// });





// -- frontend Route -- //
// Route::prefix('user')->middleware(['auth','role:user'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


// });







































// // Test user pages
// Route::get('/home-page', function () {
//     return view('frontend.home');
// });
// Route::get('/checkout', function () {
//     return view('frontend.pages.cart.checkout');
// });
// Route::get('/cart', function () {
//     return view('frontend.pages.cart.index');
// });
// Route::get('/show-order', function () {
//     return view('frontend.pages.order.show');
// });
// Route::get('/index-order', function () {
//     return view('frontend.pages.order.index');
// });
// Route::get('/single-product', function () {
//     return view('frontend.pages.product.single-product');
// });
// Route::get('/edit-profile', function () {
//     return view('frontend.pages.profile.edit');
// });
// Route::get('/address', function () {
//     return view('frontend.pages.address.index');
// });
// Route::get('/editaddress', function () {
//     return view('frontend.pages.address.edit');
// });
// Route::get('/editprofile', function () {
//     return view('frontend.pages.profile.edit');
// });
// Route::get('/confirm-password-frontend-show', function () {
//     return view('frontend.auth.confirm-password-frontend');
// });
// Route::get('/login-frontend', function () {
//     return view('frontend.auth.login-frontend');
// });
// Route::get('/register-frontend', function () {
//     return view('frontend.auth.register-frontend');
// });

// // Test admin pages
// Route::get('/backmaster', function () {
//     return view('backend.layouts.backmaster');
// });
// Route::get('/dashboard', function () {
//     return view('backend.dashboard-backend');
// })->name('dashbord.admin');
// Route::get('/authlogin', function () {
//     return view('backend.auth.login-backend');
// });
// Route::get('/authmaster', function () {
//     return view('backend.auth.layouts.authmaster');
// });
// Route::get('/register-backend', function () {
//     return view('backend.auth.register-backend');
// });
// Route::get('/reset-password', function () {
//     return view('backend.auth.reset-password-backend');
// });
// Route::get('/forgot-password', function () {
//     return view('backend.auth.forgot-password-backend');
// });
// Route::get('/verify-email', function () {
//     return view('backend.auth.verify-email-backend');
// });
// Route::get('/confirmpass', function () {
//     return view('backend.auth.confirm-password-backend');
// });
// Route::get('/password-conf', function () {
//     return view('auth.confirm-password');
// });
// Route::get('/register-backend', function () {
//     return view('backend.auth.register-backend');
// });
// Route::get('/index-prev-category', function () {
//     return view('backend.pages.category.index-prev');
// });
// Route::get('/index-old-category', function () {
//     return view('backend.pages.category.index-old');
// });
// Route::get('/index-category', function () {
//     return view('backend.pages.category.index');
// });
// Route::get('/create-category', function () {
//     return view('backend.pages.category.create');
// });
// Route::get('/edit-category-cat', function () {
//     return view('backend.pages.category.edit');
// });
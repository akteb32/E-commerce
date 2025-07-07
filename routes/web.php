<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ShippingController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\UserRoleController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\FrontCategoryController;
use App\Http\Controllers\frontend\FrontProductController;
use App\Http\Controllers\frontend\FrontSubcategoryController;
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

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('frontend/home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('backend/dashboard-backend');
// })->name('dashbord.admin')->middleware(['auth', 'verified'])->name('dashboard');




// -- -------------------------------------- backend Route ----------------------------------- -- //
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // -- dashboard Route -- //
    Route::get('/dashboard', function () {
        return view('backend/dashboard-backend');
    })->name('dashbord.admin');

    // -- user Route -- //
    Route::prefix('manage_user')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user_create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user_store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user_edit/{User}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user_update/{User}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user-delete/{User}', [UserController::class, 'destroy'])->name('user.delete');

        Route::get('/user-role/{user}', [UserRoleController::class, 'edit'])->name('user.manageRoles');
        Route::post('/user-role/{user}', [UserRoleController::class, 'update'])->name('user.updateRoles');
    });

    // -- Category Route -- //
    Route::prefix('category')->group(function () {
        Route::get('/backend_category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/backend_category_create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/backend_category_store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/backend_category_edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/backend_category_update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/backend_category-delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    });


    // --  subcategory  Route-- //
    Route::prefix('subcategory')->group(function () {
        Route::get('/backend_subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/backend_subcategory_create', [SubcategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/backend_subcategory_store', [SubcategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/backend_subcategory_edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
        Route::put('/backend_subcategory_update/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('/backend_subcategory-delete/{subcategory}', [SubcategoryController::class, 'destroy'])->name('subcategory.delete');
    });


    // -- product Route -- //
    Route::prefix('product')->group(function () {
        Route::get('/backend_product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/backend_product_create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/backend_product_store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/backend_product_edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/backend_product_update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/backend_product-delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
    });


    // -- order Route -- //
    Route::prefix('order')->group(function () {
        Route::get('/backend_order', [OrderController::class, 'index'])->name('order.index');
        Route::get('/backend_order_create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/backend_order_store', [OrderController::class, 'store'])->name('order.store');
        Route::get('/backend_order_edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
        Route::put('/backend_order_update/{order}', [OrderController::class, 'update'])->name('order.update');
        Route::delete('/backend_order-delete/{order}', [OrderController::class, 'destroy'])->name('order.delete');
    });


    // -- coupon  Route -- //
    Route::prefix('coupon')->group(function () {
        Route::get('/backend_coupon', [CouponController::class, 'index'])->name('coupon.index');
        Route::get('/backend_coupon_create', [CouponController::class, 'create'])->name('coupon.create');
        Route::post('/backend_coupon_store', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/backend_coupon_edit/{coupon}', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::put('/backend_coupon_update/{coupon}', [CouponController::class, 'update'])->name('coupon.update');
        Route::delete('/backend_coupon-delete/{coupon}', [CouponController::class, 'destroy'])->name('coupon.delete');
    });


    // -- shipping_address Route -- //
    Route::prefix('shipping_address')->group(function () {
        Route::get('/backend_shipping_address', [ShippingController::class, 'index'])->name('shipping.index');
        Route::get('/backend_shipping_address_create', [ShippingController::class, 'create'])->name('shipping.create');
        Route::post('/backend_shipping_address_store', [ShippingController::class, 'store'])->name('shipping.store');
        Route::get('/backend_shipping_address_edit/{shipping_address}', [ShippingController::class, 'edit'])->name('shipping.edit');
        Route::put('/backend_shipping_address_update/{shipping_address}', [ShippingController::class, 'update'])->name('shipping.update');
        Route::delete('/backend_shipping_address-delete/{shipping_address}', [ShippingController::class, 'destroy'])->name('shipping.delete');
    });
});









// -- -------------------------------------- frontend Route ----------------------------------- -- //
Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // -- Cart Route -- //
    Route::prefix('cart')->group(function () {
        Route::get('/cart', [CartController::class, 'addToCart'])->name('cart.add');
    });
    
});





// -- -------------------------------------- guest Route ----------------------------------- -- //
Route::prefix('guest')->middleware(['guest'])->group(function () {

    // -- Category Route -- //
    Route::prefix('category')->group(function () {
        Route::get('/frontend-category', [FrontCategoryController::class, 'index'])->name('frontcategory.index');
    });
    // -- subcategory Route -- //
    Route::prefix('subcategory')->group(function () {
        Route::get('/frontend-subcategory', [FrontSubcategoryController::class, 'index'])->name('frontsubcategory.index');
    });
    // -- product Route -- //
    Route::prefix('product')->group(function () {
        Route::get('/frontend-product', [FrontProductController::class, 'index'])->name('frontproduct.index');
    });
});

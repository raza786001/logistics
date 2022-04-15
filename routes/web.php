<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\VendorController;
use App\Http\Controllers\admin\StoreController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.pages.home');
// });
Auth::routes();
Route::get('/', [HomeController::class, 'index']);

Route::get('/about-us', [HomeController::class, 'about']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/shipping-calculator', [HomeController::class, 'shipping_calculator']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/user-login', [HomeController::class, 'user_login']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::post('/login-data', [HomeController::class, 'logindata'])->name('login.data');
Route::post('/subscrption', [HomeController::class, 'subscrption'])->name('sub.scription');

Route::prefix('admin')->middleware(['auth'])->group(function()
{

Route::get('/logout', [LoginController::class, 'admin_logout']);

// Admin Routes
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/categories-view', [CategoryController::class, 'index']);
Route::put('/categories/update',[CategoryController::class,'update']);
Route::resource('/categories', CategoryController::class)->middleware('role:vendor|admin');
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete_category'])->name('category.delete');
Route::get('/categories-add', [CategoryController::class, 'create']);




Route::get('/vendors-view', [VendorController::class, 'index']);
Route::get('/order-view', [OrderController::class, 'index']);
Route::get('/order-create', [OrderController::class, 'create']);
Route::put('/vendors/update',[VendorController::class,'update']);
Route::get('/vendors/create', [VendorController::class, 'create']);
Route::get('/vendors/{id}',[VendorController::class,'show']);
Route::resource('/vendors', VendorController::class)->middleware('role:vendor|admin');
Route::get('/vendors/delete/{id}', [VendorController::class, 'delete_vendor'])->name('vendors.delete');
Route::post('/vendors/store', [VendorController::class, 'store']);
Route::post('/order/store', [OrderController::class, 'store']);


Route::get('/stores-view', [StoreController::class, 'index']);
Route::put('/stores/update/',[StoreController::class,'update']);
Route::get('/stores/create',[StoreController::class,'create']);
Route::get('/stores/{id}',[StoreController::class,'show']);
Route::resource('/stores', StoreController::class)->middleware('role:vendor|admin');
Route::get('/stores/delete/{id}',[StoreController::class,'destroy'])->name('stores.delete');
Route::post('/stores/store',[StoreController::class,'store']);

Route::get('/allusers', [AdminController::class, 'index']);
Route::get('/allusers/show',[AdminController::class,'show']);

Route::resource('/allusers', AdminController::class);
Route::post('/allusers/store', [AdminController::class, 'store']);


Route::resource('/addroles', RolesController::class);
Route::post('/addroles/store', [RolesController::class, 'store']);
Route::get('/addroles', [RolesController::class, 'index']);

Route::get('/addpermission', [PermissionController::class, 'create']);
Route::resource('/addpermission', PermissionController::class);
Route::post('/addpermission/store', [PermissionController::class, 'store']);

Route::resource('/booking', BookingController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

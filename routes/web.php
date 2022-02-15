<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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

Route::get('/', function () {
    return redirect('/products');
})->name('welcome');

Route::get('/test', function () {
    return view('test', );
});
Route::get('/test2', function () {
    return view('test2', );
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//RUTAS DE ADMIN (NO HAY CONTROLADOR POR ESO HAY TANTAS PERDONADME)
Route::get('admin/stock', function() {
    $products = Product::all();
    $category = Category::all();
    return view('admin/stock', compact('products', 'category'));
})->name('Stock')->middleware('admin');

Route::get('admin/products', function() {
    $products = Product::all();
    return view('admin/products', compact('products'));
})->name('Productos')->middleware('admin');

Route::get('admin/users', function() {
    $users = User::all();
    return view('admin/users', compact('users'));
})->name('Usuarios')->middleware('admin');

Route::get('admin/index', function() {
    $users = User::all();
    return view('admin/index', compact('users'));
})->middleware('admin')->name('indexadmin');

Route::get('profile/show', function() {
    return view('profile/show');
})->name('profile');


//RECURSOS

Route::resource('/users',UserController::class);

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('categories', 'App\Http\Controllers\CategoryController');



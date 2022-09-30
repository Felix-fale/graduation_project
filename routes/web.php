<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\url;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ManagerProductController;

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

if (App::environment('production')) {
    url::forceScheme('https');
}

Route::get('/', [ProductController::class, 'indexaccueil'])
    ->name('products.index');

Route::get('/info/{id}', [ProductController::class, 'info'])->name('products.info');

Route::get('/montre', [ProductController::class, 'montre'])
    ->name('montre');

Route::get('/chaussure', [ProductController::class, 'chaussure'])
    ->name('chaussure');

Route::get('/sac', [ProductController::class, 'sac'])
    ->name('sac');

Route::get('/voiture', [ProductController::class, 'voiture'])
    ->name('voiture');

Route::view('/welcome', 'welcome')->name('welcome');




Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [ProductController::class, 'index'])->name('home');
    // Route::get('home/create', [ProductController::class, 'create'])->name('home.create');
    // Route::post('home/create', [ProductController::class, 'store'])->name('home.store');
    // Route::get('home/destroy/{id}', [ProductController::class, 'destroy'])->name('home.destroy');
    // Route::get('home/show/{id}', [ProductController::class, 'show'])->name('home.show');
    // Route::get('home/edit/{id}', [ProductController::class, 'edit'])->name('home.edit');
    // Route::put('home/update/{id}', [ProductController::class, 'update'])->name('home.update');

    Route::resource('/products', ProductController::class);
    // Route::get('products',[ProductController::class,'index'])->name('products');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/home', [ManagementController::class, 'index'])->name('admin.home');

    Route::resource('managements', ManagementController::class);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    Route::get('/manager/home', [ManagerProductController::class, 'index'])->name('manager.home');

    Route::resource('manager', ManagerProductController::class);
});

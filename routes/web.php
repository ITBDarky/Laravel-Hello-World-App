<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Symfony\Component\Routing\Router;

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
    return view('welcome');
});

// Route::get('hello', [ HelloWorldController::class, 'index']);
// Route::view('about, 'about');
Route::get('about', [HelloWorldController::class, 'about']);

Route::get('catalogs', [CatalogController::class, 'index']);
Route::post('catalogs', [CatalogController::class, 'store']);

Route::get('customers', [CustomerController::class, 'index']);
Route::get('customers/create', [CustomerController::class, 'create']);
Route::post('customers', [CustomerController::class, 'store']);
Route::get('customers/{customer}', [CustomerController::class, 'show']);
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('customers/{customer}', [CustomerController::class, 'update']);
Route::delete('customers/{customer}', [CustomerController::class, 'destroy']);

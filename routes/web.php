<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*|--------------------------------------------------------------------------
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('suppliers','App\Http\Controllers\SupplierController');

Route::resource('customers','App\Http\Controllers\CustomerController');

Route::resource('products','App\Http\Controllers\ProductController');

Route::resource('logs','App\Http\Controllers\LogController');

Route::resource('employees','App\Http\Controllers\EmployeeController');

Route::resource('purchases','App\Http\Controllers\PurchaseController');


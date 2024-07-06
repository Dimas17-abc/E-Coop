<?php

<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MandatorySavingController;
use App\Http\Controllers\CustomerController;

=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);


// Contoh penggunaan middleware yang benar
Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('roles', RoleController::class);
});


Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');

Route::get('customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');

Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/update', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/destroy/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::resource('mandatory-saving', MandatorySavingController::class);


});
=======
Route::get('/nasabah/index', [CustomerController::class, 'index']);
Route::get('/nasabah/showaddress/{param}', [CustomerController::class, 'showaddress']);

// student

Route::get('/nasabah/GetStudent/{name}/{code}', [CustomerController::class, 'GetStudent']);

Route::get('/person/create',[PersonController::class, 'create'])->name('person.create');
Route::post('/person/store',[PersonController::class, 'store'])->name('person.store');
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a

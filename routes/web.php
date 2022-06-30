<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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
//Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/dashboard', [HomeController::class, 'index']);
Auth::routes(['verify' => true]);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resources([
    '/contacts' => App\Http\Controllers\ContactController::class,
    '/companies' => App\Http\Controllers\CompanyController::class,
]);
Route::get('/settings/account', [App\Http\Controllers\Settings\AccountController::class,'index']);

Route::get('/settings/profile', [App\Http\Controllers\Settings\ProfileController::class,'edit'])->name('settings.profile.edit');
Route::put('/settings/profile', [App\Http\Controllers\Settings\ProfileController::class,'update'])->name('settings.profile.update');
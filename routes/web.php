<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\DailyregController;

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

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    //
Route::get('timesheet/list', [TimesheetController::class, 'list'])->name('list');
Route::resource('timesheet', TimesheetController::class);
Route::view('profile','auth/profile')->name('profile');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('timesheet', TimesheetController::class);
// Route::get('regform', [DailyregController::class, 'index'])->name('regform');
Route::resource('regform', DailyregController::class);
// Route::view('regform','regform/index');

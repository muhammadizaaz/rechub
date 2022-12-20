<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TablesController;
use Illuminate\Support\Facades\Route;

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


//auth route for wedding organizer
Route::group(['middleware' => ['auth', 'role:wo']], function() { 
    Route::get('/admin',[DashboardController::class,'index'])->name('wo.dashboard');
});

// for user
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('user.profile');
});

require __DIR__.'/auth.php';

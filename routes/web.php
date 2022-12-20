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


//auth route for admin
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/admin/participant_data',[TablesController::class,'index'])->name('participant_data');
});

// for participants
Route::group(['middleware' => ['auth', 'role:participant']], function() { 
    Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('dashboard.myprofile');
});

require __DIR__.'/auth.php';

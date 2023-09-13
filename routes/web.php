<?php

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
Auth::routes([
    // 'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.home');
    
    Route::resource('/grievances', App\Http\Controllers\GrievancesController::class);
    
    Route::resource('/contacts', App\Http\Controllers\ContactController::class);
    
    Route::delete('progress/{media_id}/media',[App\Http\Controllers\ProgressController::class,'removeMedia'])->name('remove.media');
    
    Route::resource('/progress', App\Http\Controllers\ProgressController::class);
});


Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/progresses',[App\Http\Controllers\ShowProgress::class,'index'])->name('show.progres');

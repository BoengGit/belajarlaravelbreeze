<?php

use App\Http\Controllers\TimelineController;
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

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';

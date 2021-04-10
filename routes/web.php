<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CopyandpayController;
use App\Http\Controllers\ResultController;




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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/payment', [CopyandpayController::class,'request']);
Route::get('/result', [ResultController::class,'request']);

    // Route::post('/payment', function () {
    //     return view('payment');
    // });

    //Route::post('/result', [ResultController::class,'request']);


    // Route::get('/result', function () {
    //     return view('result');
    // });

// Route::post('/result', function () {
//     return view('result');
// });
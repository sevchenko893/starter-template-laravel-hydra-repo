<?php

use App\Http\Controllers\TestController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


        // Route::get('/tests', [TestController::class, 'getAll']);
        Route::get('/test', [TestController::class, 'index']);
        Route::get('/test/create', [TestController::class, 'create']);
        Route::post('/test/store', [TestController::class, 'store']);
        // Route::delete('/test/{id}', [TestController::class, 'destroy']);
        // Route::post('/test/update/{id}', [TestController::class, 'update']);

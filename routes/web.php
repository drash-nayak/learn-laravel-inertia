<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('login', [Controllers\Auth\LoginController::class, 'create'])->name('login');
Route::post('login',[Controllers\Auth\LoginController::class,'store']);
Route::post('/logout',[Controllers\Auth\LoginController::class,'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return inertia('Home', [
            'name' => 'Drash Nayak',
            'dob' => '3, Sep 1993',
            'frameworks' => [
                'Laravel', 'Vue', 'Inertia'
            ]
        ]);
    });

    Route::prefix('/users')->group(function (){
        Route::get('/', [Controllers\UserController::class,'index']);
        Route::get('/create', [Controllers\UserController::class,'create'])
        ->middleware('can:create,App\Models\User');
        // traditional way of using middleware with can
        // ->middleware('can:create');
        Route::post('/', [Controllers\UserController::class,'store']);
    });

    Route::get('/settings', function () {
        return inertia('Settings');
    });
});


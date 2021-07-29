<?php

use App\Http\Controllers\CardController;
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


Route::get('/register', function () {
    return view('register');
});

Route::get('/hilman', function () {
    return view('hilman');
});


// Register Username
Route::post('/insert', [ CardController::class, "insert" ]);
Route::post('/update', [ CardController::class, "update" ]);
Route::get('/{key:username}/edit', [ CardController::class, "displayedit" ]);
Route::get('/{key:username}', [ CardController::class, "displayprofile" ]);



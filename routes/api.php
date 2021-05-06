<?php

use App\Http\Controllers\randomNumberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// route group for version
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'random'], function () {
        // route for generating an unique ID
        Route::get('generate', [randomNumberController::class, 'generate']);
        // route for retrieving ID or 404 if not found
        Route::get('retrieve/{ID}', [randomNumberController::class, 'retrieve']);
    });
});
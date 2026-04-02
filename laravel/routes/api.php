<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/{movie}', [MovieController::class, 'show']);

Route::post('/movies', [MovieController::class, 'store']);

Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

/*
 * Here I added a route for my index functiom for the directors
 * 
 * I added the route for the show function
 * 
 * I added the route for the store function
 * 
 * I added the route for the update function
 * 
 * I added the route for the destroy function
 * 
 */

Route::get('/directors', [DirectorController::class, 'index']);

Route::get('/directors/{director}', [DirectorController::class, 'show']);

Route::post('/directors', [DirectorController::class, 'store']);

Route::put('/directors/{director}', [DirectorController::class, 'update']);

Route::delete('/directors/{director}', [DirectorController::class, 'destroy']);

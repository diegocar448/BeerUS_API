<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return response()->json(['message' => 'BeerUs Flutter API', 'status' => 'Connected']);
});


/* Route::group(['middleware' => 'api'], function ($router) {

    Route::post('login', [ AuthController::class, 'login']);
    Route::post('register', [ AuthController::class, 'register']);
    Route::post('logout', [ AuthController::class , 'logout']);
    Route::post('refresh', [ AuthController::class, 'refresh']);
    Route::post('me', [ AuthController::class, 'me']);

    Route::resource('companies', CompanyController::class)->except(['create', 'edit']);
    Route::resource('employees', EmployeeController::class)->except(['create', 'edit']);
    Route::resource('schedules', SchedulesController::class)->except(['create', 'edit']);
    Route::resource('services', ServiceController::class)->except(['create', 'edit']);

    Route::get('/', function () {
        return response()->json(['message' => 'Barber Flutter API', 'status' => 'Connected']);
    });

}); */

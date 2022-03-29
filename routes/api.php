<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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




/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* Route::prefix('auth')->group(function() {
    Route::post('/login', [ [ AuthController::class, 'login']]);
}); */

Route::group(['middleware' => 'api', 'prefix'=> 'auth'], function ($router) {

    Route::post('login', [ AuthController::class, 'login']);
    Route::post('register', [ AuthController::class, 'register']);
    Route::post('logout', [ AuthController::class , 'logout']);
    Route::post('refresh', [ AuthController::class, 'refresh']);
    Route::get('me', [ AuthController::class, 'me']);


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

});
 */

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ListDishesOfOrdersController;
use App\Http\Controllers\MenuSectionsController;
use App\Http\Controllers\OrderDishesController;
use App\Http\Controllers\VendorsController;

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

Route::resources([
    'dishes' => DishesController::class, 
    'employees' => EmployeesController::class,
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

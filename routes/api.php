<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ListDishOfOrdersController;
use App\Http\Controllers\MenuSectionController;
use App\Http\Controllers\OrderDishController;
use App\Http\Controllers\VendorController;

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
    'dishes' => DishController::class, 
    'employees' => EmployeeController::class,
    'menu-sections' => MenuSectionController::class,
    'list-dishes-of-orders-controller' => ListDishOfOrdersController::class,
    'order-dishes-controller' => OrderDishController::class,
    'vendors' => VendorController::class, 
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

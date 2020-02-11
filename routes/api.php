<?php

use Illuminate\Http\Request;

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
Route::apiResource('people', 'api\PeopleController');
Route::apiResource('orders', 'api\OrderController');
Route::get('people/phones/{id}','api\PeopleController@personPhones')->name('person.phones');
Route::get('people/orders/{id}','api\PeopleController@personOrders')->name('person.orders');
Route::get('orders/orderItems/{id}','api\OrderController@OrderItems')->name('order.items');
Route::get('orders/ships/{id}','api\OrderController@OrderShips')->name('order.ships');

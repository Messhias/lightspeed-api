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

$resources = [
    'users'
];

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'API\ConnectionController@get');

// array map to get the resources into the api web routes.
array_map(function ($resource) {
    $path = __DIR__ . "/api/{$resource}.php";
    if (file_exists($path)) {
        include_once($path);
    }
}, $resources);

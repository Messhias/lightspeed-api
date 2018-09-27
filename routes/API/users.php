<?php

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'API\UserController@get');
});

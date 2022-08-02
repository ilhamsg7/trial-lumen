<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\StatController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DriverController;


// Driver Router
$router->group(['prefix' => 'driver'], function() use ($router) {
    $router->get('/', [
        'as' => 'get_drivers',
        'uses' => 'DriverController@index'
    ]);

    $router->post('/', [
        'as' => 'post_drivers',
        'uses' => 'DriverController@store'
    ]);

    $router->get('/{driver}', [
        'as' => 'get_driver_by_number',
        'uses' => 'DriverController@show'
    ]);

    $router->put('/{driver}', [
        'as' => 'edit_driver_by_number',
        'uses' => 'DriverController@update'
    ]);

    $router->delete('/{driver}', [
        'as' => 'delete_driver_by_number',
        'uses' => 'DriverController@destroy'
    ]);
});

$router->group(['prefix' => 'team'], function() use ($router) {
    $router->get('/', [
        'as' => 'get_team',
        'uses' => 'TeamController@index'
    ]);

    $router->post('/', [
        'as' => 'post_team',
        'uses' => 'TeamController@store'
    ]);

    $router->get('/{name}', [
        'as' => 'get_team_by_name',
        'uses' => 'TeamController@show'
    ]);

    $router->put('/{name}', [
        'as' => 'edit_team_by_name',
        'uses' => 'TeamController@update'
    ]);

    $router->delete('/{name}', [
        'as' => 'delete_team_by_name',
        'uses' => 'TeamController@destroy'
    ]);
});

$router->group(['prefix' => 'stats'], function() use ($router) {
    $router->get('/', [
        'as' => 'get_stats',
        'uses' => 'StatController@index'
    ]);

    $router->post('/', [
        'as' => 'post_stats',
        'uses' => 'StatController@store'
    ]);

    $router->get('/{stats}', [
        'as' => 'get_stats_by_number',
        'uses' => 'StatController@show'
    ]);

    $router->put('/{stats}', [
        'as' => 'edit_stats_by_number',
        'uses' => 'StatController@update'
    ]);

    $router->delete('/{stats}', [
        'as' => 'delete_stats_by_number',
        'uses' => 'StatController@destroy'
    ]);
});

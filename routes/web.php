<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// make routes for CarController and UserController

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('cars',  ['uses' => 'CarController@showAllCars']);
    $router->get('cars/{id}', ['uses' => 'CarController@showOneCar']);
    $router->post('cars', ['uses' => 'CarController@create']);
    $router->put('cars/{id}', ['uses' => 'CarController@update']);
    $router->delete('cars/{id}', ['uses' => 'CarController@delete']);


    $router->get('users',  ['uses' => 'UserController@index']);
    $router->get('users/{id}', ['uses' => 'UserController@show']);
    $router->post('users', ['uses' => 'UserController@store']);
    $router->put('users/{id}', ['uses' => 'UserController@update']);
    $router->delete('users/{id}', ['uses' => 'UserController@destroy']);

    // make routes for associate and disassociate cars and users

    $router->post('users/{id}/cars/{car_id}', ['uses' => 'UserController@associateCar']);
    $router->delete('users/{id}/cars/{car_id}', ['uses' => 'UserController@disassociateCar']);
});



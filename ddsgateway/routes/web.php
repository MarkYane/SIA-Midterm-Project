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

// more simple routes
//USER 1 
$router->get('/users1',['uses' => 'User1Controller@getUsers']);
$router->get('/users1', 'User1Controller@index'); // get all users 
$router->post('/users1', 'User1Controller@add'); // create new user 
$router->get('/users1/{id}', 'User1Controller@show'); // get user by id
$router->put('/users1/{id}', 'User1Controller@update'); // update user 
$router->patch('/users1/{id}', 'User1Controller@update'); // update user 
$router->delete('/users1/{id}', 'User1Controller@delete'); // delete 

// USER2

// more simple routes
$router->get('/users2',['uses' => 'User2Controller@getUsers']);
$router->get('/users2', 'User2Controller@index'); // get all users 
$router->post('/users2', 'User2Controller@add'); // create new user 
$router->get('/users2/{id}', 'User2Controller@show'); // get user by id
$router->put('/users2/{id}', 'User2Controller@update'); // update user 
$router->patch('/users2/{id}', 'User2Controller@update'); // update user 
$router->delete('/users2/{id}', 'User2Controller@delete'); // delete 
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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('language',  ['uses' => 'LanguagesController@showAllLanguages']);
  
    $router->get('product',  ['uses' => 'ProductsController@showAllProducts']);
    
    $router->get('product/{id}', ['uses' => 'ProductsController@showOneProduct']);
    
    
    $router->post('product', ['uses' => 'ProductsController@create']);
    
    
    $router->delete('product/{id}', ['uses' => 'ProductsController@delete']);
    
    
    $router->put('product/{id}', ['uses' => 'ProductsController@update']);
});
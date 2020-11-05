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
$router->get('/base', 'BooksController@index');
$router->get('/base/{id}', 'BooksController@show');
$router->post('/base', 'BooksController@store');
$router->put('/base/{id}', 'BooksController@update');
$router->delete('base/{id}', 'BooksController@destroy');

$router->get('/author', 'AuthorsController@index');
$router->get('/author/{id}', 'AuthorsController@show');
$router->post('/author', 'AuthorsController@store');
$router->put('/author/{id}', 'AuthorsController@update');
$router->delete('author/{id}', 'AuthorsController@destroy');
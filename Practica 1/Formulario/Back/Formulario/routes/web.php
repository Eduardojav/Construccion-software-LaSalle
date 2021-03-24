<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return 'INGLESITO'; //localhost:8000
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('reporte', 'ReporteController@index');//localhost:8000/api/word
    $router->get('reporte/{id}', 'ReporteController@show');
    $router->post('reporte', 'ReporteController@store');
    $router->put('reporte/{id}', 'ReporteController@update');
    $router->delete('reporte/{id}', 'ReporteController@destroy');

});

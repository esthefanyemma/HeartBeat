<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');
    $router->get('usuarios', 'UserController@index');
    $router->post('usuarios/criar', 'UserController@criar');
?>
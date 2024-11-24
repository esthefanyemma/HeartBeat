<?php

namespace App\Controllers;
use App\Controllers\LoginController;
use App\Core\Router;


    $router->get('dashboard', 'LoginController@exibirDashboard');
    $router->get('login', 'LoginController@exibirLogin');
    $router->post('login', 'LoginController@efetuaLogin');
    $router->post('logout', 'LoginController@logout');

?>
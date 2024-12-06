<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use App\Core\Router;

    $router->get('', 'SiteController@index');
    $router->get('publicacoes', 'SiteController@mostraListaPost');
    $router->get('usuarios', 'UserController@index');
    $router->post('usuarios/criar', 'UserController@criar');
    $router->post('usuarios/editar', 'UserController@editar');
    $router->post('usuarios/deleta', 'UserController@deleta');
    $router->get('posts', 'PostController@index');   //('URI', 'Controller@método')
    $router->post('posts/create', 'PostController@create');
    $router->post('posts/edit', 'PostController@edit');
    $router->post('posts/delete','PostController@delete');
    $router->get('dashboard', 'LoginController@exibirDashboard');
    $router->get('login', 'LoginController@exibirLogin');
    $router->post('login', 'LoginController@efetuaLogin');
    $router->post('logout', 'LoginController@logout');

?>
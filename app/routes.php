<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\UserController;
use App\Core\Router;

<<<<<<< HEAD
    $router->get('', 'ExampleController@index');
    $router->get('usuarios', 'UserController@index');
    $router->post('usuarios/criar', 'UserController@criar');
    //sla
    $router->post('usuarios/editar', 'UserController@editar');
    $router->post('usuarios/deleta', 'UserController@deleta');
=======
    $router->get('posts', 'PostController@index');   //('URI', 'Controller@método')
    $router->post('posts/create', 'PostController@create');
    $router->post('posts/edit', 'PostController@edit');
    $router->post('posts/delete','PostController@delete');
>>>>>>> CRUDposts
?>
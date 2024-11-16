<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('posts', 'PostController@index');   //('URI', 'Controller@método')
    $router->post('posts/create', 'PostController@create');
    $router->post('posts/edit', 'PostController@edit');

?>
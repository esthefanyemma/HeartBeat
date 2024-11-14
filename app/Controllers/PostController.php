<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');  //Função feita no query builder que tem q passar a tabela de post

        return view('admin/index', compact('posts'));  //Passa os dados para a view *mudar depois aq e no view pra quando criar o index no admin*
    }
}

?>
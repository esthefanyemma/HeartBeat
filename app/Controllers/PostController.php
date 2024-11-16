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

    public function create()
    {
        $parametros = [
            'author'=>1,
            'image' =>$_POST['image'],
            'title' =>$_POST['title'],
            'description' =>$_POST['description']
        ];

        echo "Entrou";

        App::get('database')->insert('posts', $parametros);

        header('Location: /posts');
    }

    public function edit()
    {
        $parametros = [
            'author'=>1,
            'image' =>$_POST['image'],
            'title' =>$_POST['title'],
            'description' =>$_POST['description'],
        ];

        $id = $_POST['id'];

        App::get('database')->update('posts', $parametros, $id);

        header('Location: /posts');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /posts');
    }


}

?>
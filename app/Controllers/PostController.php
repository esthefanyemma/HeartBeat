<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts'); 
        $users = App::get('database')->selectAll('users');

        return view('admin/tabelaPubli', compact('posts', 'users')); 
    }

    public function create()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;

        $parametros = [
            'author'=>$_POST['userID'],
            'image' =>$caminhodaimagem,
            'title' =>$_POST['title'],
            'description' =>$_POST['description']
        ];


        App::get('database')->insert('posts', $parametros);

        header('Location: /posts');
    }

    public function edit()
    {
        $id= $_POST['id'];
        $post = App::get('database')->selectOne('posts', $id);
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;
        $imagem_rota = "public/imagens/" . basename($post->image);
        unlink($imagem_rota);

        $parametros = [
            'author'=>$_POST['userID'],
            'image' =>$caminhodaimagem,
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
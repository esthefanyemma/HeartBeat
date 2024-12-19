<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    private const ITENS_PER_PAGE = 5;

    public function index()
    {
        
        $users = App::get('database')->selectAllList('users');
        
        if (isset($_GET['search'])) {
            $total_itens = App::get('database')->countWithSearch('posts', 'title', $_GET['search']);
            $total_pages = ceil($total_itens / PostController::ITENS_PER_PAGE);
            
            if (
                isset($_GET['page'])
                && filter_var($_GET['page'], FILTER_VALIDATE_INT)
                && $_GET['page'] > 0
                && $_GET['page'] <= $total_pages
                )
                $page = $_GET['page'];
                else
                $page = 1;
            
            $skip = ($page - 1) * PostController::ITENS_PER_PAGE;
            
            $posts = App::get('database')->selectAllWhithSearch('posts', 'title', $_GET['search'], PostController::ITENS_PER_PAGE, $skip);
            $search = "&search=" . $_GET['search'];
            return view('admin/tabelaPubli', compact('posts', 'users', 'page', 'total_pages', 'search'));
        }
        
        $total_itens = App::get('database')->count('posts');
        $total_pages = ceil($total_itens / PostController::ITENS_PER_PAGE);
        
        if (
            isset($_GET['page'])
            && filter_var($_GET['page'], FILTER_VALIDATE_INT)
            && $_GET['page'] > 0
            && $_GET['page'] <= $total_pages
            )
            $page = $_GET['page'];
            else
            $page = 1;
        
        $skip = ($page - 1) * PostController::ITENS_PER_PAGE;
        
        $posts = App::get('database')->selectAllList("posts", PostController::ITENS_PER_PAGE, $skip);
        return view('admin/tabelaPubli', compact('posts', 'users', 'page', 'total_pages'));
    }

    public function create()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;

        $parametros = [
            'author' => $_POST['userID'],
            'image' => $caminhodaimagem,
            'title' => $_POST['title'],
            'description' => $_POST['description']
        ];


        App::get('database')->insert('posts', $parametros);

        header('Location: /posts');
    }

    public function edit()
    {
        $id = $_POST['id'];
        $post = App::get('database')->selectOne('posts', $id);
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;
        $imagem_rota = "public/imagens/" . basename($post->image);
        unlink($imagem_rota);

        $parametros = [
            'author' => $_POST['userID'],
            'image' => $caminhodaimagem,
            'title' => $_POST['title'],
            'description' => $_POST['description'],
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

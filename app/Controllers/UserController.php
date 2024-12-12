<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{

    
    private const ITENS_PER_PAGE = 5;
    public function index()
    {
        
        if(isset($_GET['search'])){
            $total_itens = App::get('database')->countWithSearch('users', 'name', $_GET['search']);
            $total_pages = ceil($total_itens/UserController::ITENS_PER_PAGE);
            
            if(
                isset($_GET['page']) 
                && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
                && $_GET['page'] > 0 
                && $_GET['page'] <= $total_pages
                )
                $page = $_GET['page'];
                else 
                $page = 1;
            
            $skip = ($page - 1) * UserController::ITENS_PER_PAGE;
            
            $users = App::get('database')->selectAllWhithSearch('users', 'name', $_GET['search'], UserController::ITENS_PER_PAGE, $skip);
            $search = "&search=" . $_GET['search'];
            return view('admin/tabelaUsuario', compact( 'users', 'page', 'total_pages', 'search'));
        }
        
        $total_itens = App::get('database')->countAll('users');
        $total_pages = ceil($total_itens/UserController::ITENS_PER_PAGE);
        
        if(
            isset($_GET['page']) 
            && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
            && $_GET['page'] > 0 
            && $_GET['page'] <= $total_pages
            )
            $page = $_GET['page'];
            else 
            $page = 1;
        
        $skip = ($page - 1) * UserController::ITENS_PER_PAGE;
        
        $users = App::get('database')->selectAllList('users', UserController::ITENS_PER_PAGE, $skip);
        return view('admin/tabelaUsuario', compact( 'users', 'page', 'total_pages'));
    }
    public function criar(){
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;
        $parametros=[
             'name'=> $_POST['nome'],
             'email'=> $_POST['email'] ,
             'password'=> $_POST['senha'],
             'image'=>$caminhodaimagem
        ];
        App::get('database')->criar($parametros);
        header("Location: /usuarios");
    }

    public function editar(){
        $id= $_POST['id'];
        $users = App::get('database')->selectOne('users', $id);
        $temporario = $_FILES['imagem']['tmp_name'];
                $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                $destinoimagem = "public/imagens/";
                move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
                $caminhodaimagem = "public/imagens/" . $nomeimagem;
                $imagem_rota = "public/imagens/" . basename($users->image);
                unlink($imagem_rota);
        $parametros =[
            'name'=> $_POST['nome'],
            'email'=> $_POST['email'],
            'password'=> $_POST['senha'],
            'image'=>$caminhodaimagem
        ];
        App::get('database')->atualizar('users',$id ,$parametros);
        header('Location: /usuarios');
    }

    public function deleta(){
        $id = $_POST['id'];
        
        App::get('database')->deletar('users', $id);
        header('Location: /usuarios');
    }
}



?>
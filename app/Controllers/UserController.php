<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('admin/tabelaUsuario',compact('users') );
    }
    public function criar(){
        //$nomeimagem = sha1(uniqid($_FILES[]))
       //$caminhodeimagem = "public/imagens/" . $nomeimagem;
        $parametros=[
             'name'=> $_POST['nome'],
             'email'=> $_POST['email'] ,
             'password'=> $_POST['senha'],
             //'image'=> $caminhodeimagem
        ];
        App::get('database')->criar($parametros);
        header("Location: /usuarios");
    }

    public function editar(){
        $parametros =[
            'name'=> $_POST['nome'],
            'email'=> $_POST['email'],
            'password'=> $_POST['senha'],
        ];
        $id= $_POST['id'];
        App::get('database')->atualizar('users',$id ,$parametros);
        header('Location: /usuarios');
    }

    public function deleta(){
        $id = $_POST['deletarusuario'];
        App::get('database')->deletar('users', $id);
        header('Location: /usuarios');
    }
}

?>
<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{
    public function index()
    {
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
        return 0;
    }
}

?>
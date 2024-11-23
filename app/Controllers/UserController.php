<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController{
    public function index()
    {
        $page=1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])){
            $page = intval($_GET['paginacaoNumero']);
            if($page <= 0){
                return redirect('admin/usuarios');
            }
        }
        $itensPage = 3;
        $inicio = $itensPage * $page - $itensPage;
        $rows_cont = App::get('database')->countAll('users' , $inicio, $itensPage);

        $total_pages = ceil($rows_cont / $itensPage);

        if($inicio > $rows_cont)
        return redirect('admin/usuarios');


        $users = App::get('database')->selectAll('users');
        return view('admin/tabelaUsuario',compact('users','page', 'total_pages') );
    }
    public function criar(){
        //$nomeimagem = sha1(uniqid($_FILES[]))
       //$caminhodeimagem = "public/imagens/" . $nomeimagem;
        $parametros=[
             'name'=> $_POST['nome'],
             'email'=> $_POST['email'] ,
             'password'=> $_POST['senha'],
             'image'=>'oi',
        ];
        App::get('database')->criar($parametros);
        header("Location: /usuarios");
    }

    public function editar(){
        $parametros =[
            'name'=> $_POST['nome'],
            'email'=> $_POST['email'],
            'password'=> $_POST['senha'],
            'image'=>'oi',
        ];
        $id= $_POST['id'];
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
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
        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        if($inicio > $rows_count){
            return redirect('admin/usuarios');
        }
        $users = App::get('database')->selectAll('users', $inicio, $itensPage);
        $total_pages = ceil($rows_count / $itensPage);

        return view('admin/tabelaUsuario',compact('users','page', 'total_pages') );
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
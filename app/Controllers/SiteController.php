<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SiteController{
    public function index()
    {
        return view('site/landingPage'); 
    }

    public function mostraListaPost()
    {
        // return view('site/listadeposts');

        $page=1;
         if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])){
             $page = intval($_GET['paginacaoNumero']);
             if($page <= 0){
                 return redirect('admin/posts');
             }
         }
         $itensPage = 6;
         $inicio = $itensPage * $page - $itensPage;
         $rows_count = App::get('database')->countAll('posts');

         if($inicio > $rows_count){
             return redirect('admin/posts');
         }

        $total_pages = ceil($rows_count / $itensPage);

        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage); 
        $users = App::get('database')->selectAll('users');


        return view('site/listadeposts', compact('posts', 'users', 'page', 'total_pages')); 
    }
}
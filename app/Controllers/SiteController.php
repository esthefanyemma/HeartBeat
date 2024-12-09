<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SiteController{
    public function index()
    {
        return view('site/landingPage'); 
    }

    private const ITENS_PER_PAGE = 6;

    public function mostraListaPost()
    {
        $users = App::get('database')->selectAll('users');

        if(isset($_GET['search'])){
            $total_itens = App::get('database')->countWithSearch('posts', 'title', $_GET['search']);
            $total_pages = ceil($total_itens/SiteController::ITENS_PER_PAGE);

            if(
            isset($_GET['page']) 
            && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
            && $_GET['page'] > 0 
            && $_GET['page'] <= $total_pages
            )
                $page = $_GET['page'];
            else 
                $page = 1;

            $skip = ($page - 1) * SiteController::ITENS_PER_PAGE;

            $posts = App::get('database')->selectAllWhithSearch('posts', 'title', $_GET['search'], SiteController::ITENS_PER_PAGE, $skip);
            $search = "&search=" . $_GET['search'];
            return view('site/listadeposts', compact('posts', 'users', 'page', 'total_pages', 'search'));
        }
        
        $total_itens = App::get('database')->count('posts');
        $total_pages = ceil($total_itens/SiteController::ITENS_PER_PAGE);

        if(
        isset($_GET['page']) 
        && filter_var($_GET['page'], FILTER_VALIDATE_INT) 
        && $_GET['page'] > 0 
        && $_GET['page'] <= $total_pages
        )
            $page = $_GET['page'];
        else 
            $page = 1;

        $skip = ($page - 1) * SiteController::ITENS_PER_PAGE;

        $posts = App::get('database')->selectAll("posts", SiteController::ITENS_PER_PAGE, $skip);
        return view('site/listadeposts', compact('posts', 'users', 'page', 'total_pages'));


        // $page=1;
        // $itensPage = 6;
        // if(isset($_GET['search'])){
        //     $total_itens = App::get('database')->countWithSearch('posts', 'title', $_GET['search']);
        //     $total_pages = ceil($total_itens / $itensPage);
            
        //     if(isset($_GET['page']) && filter_var($_GET['page'], FILTER_VALIDATE_INT) && $_GET['page']>0 && $_GET['page'] <= $total_pages)
        //         $page = $_GET['page'];

        //         else
        //         $page = 1;

        //         $skip = ($page - 1) * $itensPage;

        //         $posts = App::get('database')->selectAllWhithSearch('posts', 'titulo', $_GET['search'], $itensPage , $skip);
        //         $search = "&search=" . $_GET['search'];
        //         return view('site/listadeposts', compact('posts', 'page', 'total_pages', 'search'));
        // }


        //  if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])){
        //      $page = intval($_GET['paginacaoNumero']);
        //      if($page <= 0){
        //          return redirect('site/listadeposts');
        //      }
        //  }
        //  $inicio = $itensPage * $page - $itensPage;
        //  $rows_count = App::get('database')->countAll('posts');

        //  if($inicio > $rows_count){
        //      return redirect('site/listadeposts');
        //  }

        // $total_pages = ceil($rows_count / $itensPage);

        // $posts = App::get('database')->selectAll('posts', $inicio, $itensPage); 
        // $users = App::get('database')->selectAll('users');


        // return view('site/listadeposts', compact('posts', 'users', 'page', 'total_pages')); 

    }

    public function mostraPostIndividual()
    {
        $id = $_GET['id'];
        $post = App::get('database')->selectOne('posts', $id);  
        $user = App::get('database')->selectOne('users', $post[0]->author);  
        return view('site/postIndividual', compact('post','user'));
    }

    // public function mostraPostIndividual()
    // {
    //     return view('site/postIndividual');
    // }




}
<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: /login');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
    <div class="cabeçalho">
        <div class="logo-tipo">
            <img src="/public/assets/logo2.png" alt="logo do blog"> 
                <h1>DASHBOARD</h1>
        </div>
        <div class="divlogout">
            <form action="/logout" method="POST">
                <button class="button-logout" type="submit">
                    <span class="material-icons">
                    logout
                    </span>
                </button>
            </form>    
        </div>
    </div>
    <div class="diminuir">
        <div class="botoes-superiores">
            <a>Tabela de <br>Posts</a> 
                <a>Tabela de <br>Usuários</a>
        </div>
    </div>


</body>

</html>
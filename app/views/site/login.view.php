<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../../../public/css/loginStyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <div class="login-box">
        <div class="logo-login">
          <img src="../../../public/assets/heartBeats-logo-com-nome.png" alt="Logo Heartbeats"/>
        </div>
        <form action="/login" method="POST">
          <h1>Login</h1>
          <div class="mensagem-erro">
            <?php 
              // session_start();
              if(isset($_SESSION['mensagem-erro'])){
                echo $_SESSION['mensagem-erro'];
              }
              unset($_SESSION['mensagem-erro']);
            ?>
          </div>
          <div class="textbox">
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="textbox">
            <input type="password" name="password" placeholder="Senha" />
          </div>
          <input type="submit" class="btn-entrar" value="Entrar" />
        </form>
      </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal editar usuário</title>
    <link rel="stylesheet" href="/public/css/modaleditarusuario.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
</head>
<body>
   <div class="modaledit modal" id="editarusuario<?= $user->id?>">
      <div class="img-entrada">
        <label>
            <input type="file" accept="image/*" class="img-inp">
            <span class="material-symbols-outlined">
                edit
                </span>
                <img src="/public/assets/Ellipse 1.png" alt="">
        </label>
        <form method="POST" action="/usuarios/editar">
            <input type="hidden" name="id" value="<?php echo $user->id ?>">
       </div>
           <header>
        
           </header>
           <div class="info-usuario">
            <h2><?=$user->name ?></h2>
            <p><?=$user->email ?></p>
            <div class="campodeentrada">
                        <div class="formularios" >
                            <label class="nomecampos">Nome:</label>
                            <input type="text" name="nome" placeholder="Seu nome" value="<?=$user->name ?>" required>
                        </div>
                        <div class="formularios" >
                            <label class="nomecampos">Email:</label>
                            <input type="email" name="email" placeholder="Seu Email" value="<?=$user->email ?>" required>
                        </div>
                        <div class="formularios" >
                            <label class="nomecampos">Senha:</label>
                            <input type="password" name="senha" placeholder="Senha" value="<?=$user->password ?>" required>
                        </div>
            </div>
            <div class="btns-edit">
                <button  type="submit">Salvar </button>
                <button type="button" onclick="fechaModal()">Cancelar</button>
            </div>
           </div>
        </form>
   </div>
   <script src="/public/js/modal.js"></script>
</body>
</html>
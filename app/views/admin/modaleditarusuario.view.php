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
   <div class="modaledit modal" id="editarusuario">
      <div class="img-entrada">
        <label>
            <input type="file" accept="image/*" class="img-inp">
            <span class="material-symbols-outlined">
                edit
                </span>
                <img src="/public/assets/Ellipse 1.png" alt="">
        </label>
        <form>
       </div>
           <header>
        
           </header>
           <div class="info-usuario">
            <h2>Anonimo da Silva</h2>
            <p>email@gmail.com</p>
            <div class="campodeentrada">
                        <div class="formularios" >
                            <label class="nomecampos">Nome:</label>
                            <input type="text" name="nome" placeholder="Seu nome" required>
                        </div>
                        <div class="formularios" >
                            <label class="nomecampos">Email:</label>
                            <input type="text" name="email" placeholder="Seu Email" required>
                        </div>
                        <div class="formularios" >
                            <label class="nomecampos">Senha:</label>
                            <input type="text" name="senha" placeholder="Senha" required>
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
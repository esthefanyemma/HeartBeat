<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal criar usuário</title>
    <link rel="stylesheet" href="/public/css/modalCriarUserStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
</head>
<body>
   <div class="modaledit-CU modal" id="criarUser">
       <form id="criarUser" action="usuarios/criar" method="post"  enctype="multipart/form-data"> 
       <div class="img-entrada-CU">
       <div>
                    <input type="file" name="imagem" >
                </div>
       <!-- <label>
           <div class="escuro"><img src="../../../public/assets/pencil-alt.svg" alt=""></div>
            <input type="file" name="imagem"  class="img-inp-CU">
    
        </label> -->
       </div>
           <header class="titulo-CU">
           </header>
           <div class="info-usuario-CU">
            <div class="campoEntrada-CU">
                        <div class="formularios-CU" >
                            <label class="nomecampos-CU">Nome:</label>
                            <input type="text" name="nome" placeholder="HeartBeats Da Silva" required>
                        </div>
                        <div class="formularios-CU" >
                            <label class="nomecampos-CU">Email:</label>
                            <input type="email" name="email" placeholder="heartbeats@exemplo.com" required>
                        </div>
                        <div class="formularios-CU" >
                            <label class="nomecampos-CU">Senha:</label>
                            <input type="password" name="senha" placeholder="***********" required>
                        </div>
            </div>
            <div class="btns-edit-CU">
                <button  type="submit">Criar</button>
                <button  type="button" onclick="fechaModal()">Cancelar</button>
            </div>
           </div>
        </form>
   </div>
    <script src="/public/js/modal.js"></script>
</body>
</html>
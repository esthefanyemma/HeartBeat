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
    <div class="modaledit modal" id="editarusuario<?= $user->id ?>">
        <form method="POST" enctype="multipart/form-data" action="/usuarios/editar">
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <div class="img-entrada">
                <label>
                    <div class="escuro"><img src="../../../public/assets/pencil-alt.svg" alt=""></div>
                    <input type="file" accept="image/*" name="imagem" class="img-inp-CU" id="img-inp-CU<?= $user->id?>" required>
                    <img class="imgEdit" id="imgEdit<?= $user->id?>" src="<?= $user->image ?>" alt="">
                </label>
            </div>
            <header class="header-VU">

            </header>
            <div class="info-usuario">
                <h2><?= $user->name ?></h2>
                <p><?= $user->email ?></p>
                <div class="campodeentrada-EU">
                    <div class="formularios-EU">
                        <label class="nomecampos">Nome:</label>
                        <input type="text" name="nome" placeholder="Seu nome" value="<?= $user->name ?>" >
                    </div>
                    <div class="formularios-EU">
                        <label class="nomecampos">Email:</label>
                        <input type="email" name="email" placeholder="Seu Email" value="<?= $user->email ?>" >
                    </div>
                    <div id="formularioSenha-EU">
                            <label class="nomecampos-EU">Senha:</label>
                            <div class="inputSenha-EU">
                                <input type="password" name="senha" placeholder="***********" required id="input-EU" >
                                <i class="fa-solid fa-eye" onclick="toggleSenha('input-EU')"></i>
                            </div>
                        </div>
                </div>
                <div class="btns-edit">
                    <button class="btnEdit" type="submit">Salvar </button>
                    <button class="btnEdit" type="button" onclick="fechaModal()">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
    <script>
        function trocaImagem(id){
            const painel = document.querySelector('#imgEdit'+id);
            const inputImagem = document.querySelector('#img-inp-CU' +id);
            const spanImage = painel.querySelector('#imgEdit'+id);


            if (inputImagem) {
                 
                    const arquivo = inputImagem.files[0];

                    if (arquivo) {
                        const reader = new FileReader();
                        reader.addEventListener('load', function(e) {
                            const readerTarget = e.target;

                            spanImage.src = readerTarget.result;
                        });

                        reader.readAsDataURL(arquivo);
                    } else {
                        spanImage.src = "../../../public/assets/profile-picture-973460_1280.webp";
                    }
                };
            }

            function toggleSenha(idInput){
                let input = document.getElementById(idInput);
                if(input.type === 'password')
                    input.type = 'text';
                else
                    input.type = 'password';
            }
    </script>

</html>
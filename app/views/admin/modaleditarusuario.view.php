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
            <div class="img-entrada">
                <label>
                    <div class="escuro"><img src="../../../public/assets/pencil-alt.svg" alt=""></div>
                    <input type="file" accept="image/*" name="imagem" class="img-inp-CU">
                    <img class="imgEdit" src="<?= $user->image ?>" alt="">
                </label>
            </div>
            <header>

            </header>
            <div class="info-usuario">
                <h2><?= $user->name ?></h2>
                <p><?= $user->email ?></p>
                <div class="campodeentrada">
                    <div class="formularios">
                        <label class="nomecampos">Nome:</label>
                        <input type="text" name="nome" placeholder="Seu nome" value="<?= $user->name ?>" required>
                    </div>
                    <div class="formularios">
                        <label class="nomecampos">Email:</label>
                        <input type="email" name="email" placeholder="Seu Email" value="<?= $user->email ?>" required>
                    </div>
                    <div class="formularios">
                        <label class="nomecampos">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha" value="<?= $user->password ?>" required>
                    </div>
                </div>
                <div class="btns-edit">
                    <button class="btnEdit" type="submit">Salvar </button>
                    <button class="btnEdit" type="button" onclick="fechaModal()">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
    <script src="/public/js/modal.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const painel = document.querySelector('.img-entrada');
            const inputImagem = painel.querySelector('input[type="file"]');
            const spanImage = painel.querySelector('.imgEdit');
            const icone = painel.querySelector('.escuro img');

            if (inputImagem) {
                inputImagem.addEventListener('change', function(e) {
                    const inputTarget = e.target;
                    const arquivo = inputTarget.files[0];

                    if (arquivo) {
                        const reader = new FileReader();
                        reader.addEventListener('load', function(e) {
                            const readerTarget = e.target;

                            spanImage.src = readerTarget.result;
                            icone.style.display = 'none';
                        });

                        reader.readAsDataURL(arquivo);
                    } else {
                        spanImage.src = "../../../public/assets/profile-picture-973460_1280.webp";
                        icone.style.display = 'block';
                    }
                });
            }
        });
    </script>
</body>

</html>
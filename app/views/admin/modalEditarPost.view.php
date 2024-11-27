<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartBeats - Modal criar post</title>
    <link rel="stylesheet" href="/public/css/modalEditarPost.css">
</head>
<body>
    <div class="novoModal modal" id="modalEditPost<?= $post->id?>">
        <div class="modalEditarPost">
            <div class="tituloModalEditar">
                <h1>Editar Publicação</h1>
            </div>
            <div class="conteudoEditar">
                <form method="POST" action="/posts/edit" enctype="multipart/form-data">
                    <div class="infosFixasEditar">
                        <p><?= $user->name?></p>
                        <p><?php 
                            $horario = new DateTime($post->date);
                            echo $horario->format('d/m/y H:i');
                        ?></p>
                    </div>
                    <label for="adcImageEditar" class="imagemEditar" >
                        <div class="escuroPost"><img src="../../../public/assets/pencil-alt.svg" alt=""></div>
                        <img class="imgPost" src="<?= $post->image ?>" alt="">
                    </label>
                    <input type="file" accept="image/*" id="adcImageEditar" autofocus name="imagem">
                    <input type="text" name="title" id="adcTituloEditar" placeholder="<?= $post->title?>" required>
                    <textarea id="adcDescEditar" placeholder='<?= $post->description?>' name="description" required></textarea>
                    <input type="hidden" value="<?= $post->id?>" name="id">
                    <input type="hidden" value="<?= $user->id?>" name="userID">
                    <div class="botoesEditar">
                        <button type="submit" class="botaoEditar">Salvar</button>
                        <button class="botaoCancelarEditar" onclick="fechaModal()">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const painel = document.querySelector('.imagemEditar');
            const inputImagem = document.querySelector('#adcImageEditar');
            const spanImage = painel.querySelector('.imgPost');
            const icone = painel.querySelector('.escuroPost img');

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
</html>
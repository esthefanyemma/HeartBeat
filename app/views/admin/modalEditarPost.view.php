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
                        <p><?php foreach($users as $user):?><?= $user->id === $post->author ? $user->name : "" ?><?php endforeach;?></p>
                        <p><?php 
                            $horario = new DateTime($post->date);
                            echo $horario->format('d/m/y H:i');
                        ?></p>
                    </div>
                    <label for="adcImageEditar<?= $post->id?>" class="imagemEditar" id="imagemEditar<?= $post->id?>">
                        <img class="imgPost" id="imgPost<?= $post->id?>" src="<?= $post->image ?>" alt="" value="<?= $post->image?>">
                    </label>
                    <input type="file" accept="image/*" id="adcImageEditar<?= $post->id?>" class="adcImageEditar" autofocus name="imagem" onchange="trocaImagem('<?= $post->id?>')" required>
                    <div class="editmodalh2titulo">
                        <h2 class="modaleditar-h2">Título:</h2>
                    </div>
                    <input type="text" name="title" id="adcTituloEditar" placeholder="Título da publicação" value="<?= $post->title?>" required>
                    <div class="editmodalh2descricao">
                    <h2 class="modaleditar-h2">Descrição:</h2>
                    </div>
                    <textarea id="adcDescEditar" placeholder='Descrição da publicação' name="description" required><?= $post->description?></textarea>
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
        function trocaImagem(id){
            const painel = document.querySelector('#imagemEditar'+id);
            const inputImagem = document.querySelector('#adcImageEditar' +id);
            const spanImage = painel.querySelector('#imgPost'+id);


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
    </script>
</html>
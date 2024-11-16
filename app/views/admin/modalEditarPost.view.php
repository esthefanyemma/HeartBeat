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
                <form method="POST" action="/posts/edit">
                    <div class="infosFixasEditar">
                        <p><?= $post->author?></p>
                        <p><?= $post->date?></p>
                    </div>
                    <label for="adcImageEditar" class="imagemEditar" >
                        <i class="fa-solid fa-image"></i>
                        <span>Adicione uma imagem</span>
                    </label>
                    <input type="file" accept="image/*" id="adcImageEditar" autofocus name="image">
                    <input type="text" name="title" id="adcTituloEditar" placeholder="<?= $post->title?>">
                    <textarea id="adcDescEditar" placeholder='<?= $post->description?>' name="description"></textarea>
                    <input type="hidden" value="<?= $post->id?>" name="id">
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
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartBeats - Modal criar post</title>
    <link rel="stylesheet" href="/public/css/modalcriarpost.css">
</head>
<body>
    <div class="modalCriarPost modal" id="modalCriarPost">
        <div class="tituloModalCriar">
            <h1>Criar Publicação</h1>
        </div>
        <form class="conteudoCriar" method="POST" action="/posts/create">
            <div class="infosFixas">
                <p>Nome do autor</p>
                <p>Data de agors</p>
            </div>
            <label for="adcImage" class="imagemCriar" title="Clique para adicionar uma imagem" >
                <i class="fa-solid fa-image"></i>
                <span>Adicione uma imagem</span>
            </label>
            <input type="file" accept="image/*" id="adcImage" name="image" autofocus required>
            <input type="text" name="title" id="adcTitulo" placeholder="Digite o título da publicação" required>
            <textarea name="description" id="adcDesc" placeholder="Digite a descrição da publicação" required></textarea>
            <div class="botoesCriar">
                <button type="submit" class="botaoCriar">Criar</button>
                <button class="botaoCancelar" onclick="fechaModal()" >Cancelar</button>
            </div>
        </form>
    </div>
</body>
    <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
    <script>
        const painel = document.querySelector('.imagemCriar');
    const escrito = painel.querySelector('span');
            // console.log(span1)
            // console.log(label1);
    const inputImagem = document.getElementById('adcImage');
            // console.log(inputImagem);
    inputImagem.addEventListener('change', function(){
                escrito.innerHTML = "Imagem selecionada"; 
                painel.style.color = "#88c8ee";
})
    </script>
</html>
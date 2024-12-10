<?php 
  session_start();
  $userAtual = $_SESSION['id'];
 ?>
 
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
        <form class="conteudoCriar" method="POST" action="/posts/create" enctype="multipart/form-data">
            <div class="infosFixas">
                <p><?php foreach($users as $user):?><?= $user->id === $userAtual ? $user->name : "" ?><?php endforeach;?></p>
                <p><?php 
                    $timezone = new DateTimeZone('America/Sao_Paulo');
                    $agora = new DateTime('now', $timezone);
                    echo $agora->format('d/m/y H:i');
                ?></p>
            </div>
            <label for="adcImage" class="imagemCriar" title="Clique para adicionar uma imagem" >
                <i class="iconeImg fa-solid fa-image"></i>
                <span class="spanImage" >Adicione uma imagem</span>
            </label>
            <input type="file" accept="image/*" id="adcImage" name="imagem" autofocus required>
            <input type="text" name="title" id="adcTitulo" placeholder="Digite o título da publicação" required>
            <textarea name="description" id="adcDesc" placeholder="Digite a descrição da publicação" required></textarea>
            <input type="hidden" value="<?= $userAtual?>" name="userID">
            <div class="botoesCriar">
                <button type="submit" class="botaoCriar">Criar</button>
                <button type="button" class="botaoCancelar" onclick="fechaModal()" >Cancelar</button>
            </div>
        </form>
    </div>
</body>
    <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
    <script src="/public/js/modal.js"></script>
    <script>
        const painel = document.querySelector('.imagemCriar');
        const escrito = painel.querySelector('span');
        const inputImagem = document.getElementById('adcImage');
        const spanImage = document.querySelector('.spanImage');
        const icone = document.querySelector('.iconeImg');


        inputImagem.addEventListener('change', function(e){
            const inputTarget = e.target;
            const arquivo = inputTarget.files[0];
            
            if(arquivo){
                const reader = new FileReader();
                reader.addEventListener('load', function(e){
                    const readerTarget = e.target;

                    const img = document.createElement("img");
                    img.src = readerTarget.result;
                    img.classList.add("imgCaixa");

                    spanImage.innerHTML = "";
                    icone.classList.remove("fa-solid");
                    icone.classList.remove("fa-image");
                    spanImage.appendChild(img);
                })

                reader.readAsDataURL(arquivo);
            }
            else{
                spanImage.innerHTML = "Adicione uma imagem";
                icone.classList.toggle("fa-solid");
                icone.classList.toggle("fa-image");
            }
        })


    </script>
</html>
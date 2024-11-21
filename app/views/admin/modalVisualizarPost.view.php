<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/public/css/modalvisualizarpost.css">
    <title>Visualizar Post</title>
</head>
<body>
    <div class="modal_visualizarPost modal" id="modalVerPost<?= $post->id?>">
        <form >
            <div class="desc_visualizacao">
                <h1 class="tituloVP">
                    Vizualizar publicação
                </h1>
                <i id="X" class="bi bi-x-lg" onclick="fechaModal()"></i>  
            </div>

                <div class="esct_autor_data">
                    <p class="texto"><?= $post->author?></p>
                    <p class="texto"><?php 
                    $horario = new DateTime($post->date);
                    echo $horario->format('d/m/y H:i');
                ?></p>
                </div>
                <div class="imagem_post">
                    <!-- <img src="<?= $post->image?>" alt="Imagem da publicação"> -->
                    <img src="/public/assets/Frame 7.png" alt="">
                </div>
                <div class="esct_post">
                    <p class="tituloPost"><?= $post->title ?></p>
                    <p class="texto"> <?= $post->description ?></p>
                </div>
        </form>
    </div>
</body>
</html>
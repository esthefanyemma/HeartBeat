
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/landingPage.css">
    <title>HeartBeats</title>
</head>
<body>

    
   <?php require 'navbar.html'?> 

    <div class="posts">
        <div class="desc">
            <div class="imagemHB"><img src="/public/imagens/escrito.png" alt=""></div>
            <div class="texto"><p>Bem vindo ao HeartBeats! Aqui no nosso blog você vai encontrar diversos tipo de conteúdo envolvendo os 
                diversos grupos de K-pop, seja curiosidades ou ate as novidades sobre qualquer grupo.
                Abaixo está alguns grupos que você pode acabar encontrando:
                 </p></div>
        </div>
        <div class="grupos">
            <form class="conj">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide">                
                        <div class="item">
                            <img src="../../../public/assets/heartBeats-logo.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../../public/imagens/bts1-logo.webp" alt="">

                        </div>

                        <div class="item">
                            <img src="../../../public/imagens/monstra-logo.webp" alt="">

                        </div>
                        
                        </div>
                        <div class="swiper-slide">                
                            <div class="item">
                                <img src="../../../public/imagens/nsei-logo.webp" alt="">

                            </div>
                            <div class="item">
                                <img src="../../../public/imagens/exo-logo.webp" alt="">
                            </div>
                            <div class="item">
                                <img src="../../../public/imagens/tw1-logo.webp" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                  
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </form>   
        </div>
        <p class="titulo">POST RECENTES</p>
        <div class="postG">
            <form class="postLista1">
                <?php for($i=0;$i<6;$i++):?>
                    <?php foreach ($users as $user): ?><?php $posts[$i]->author == $user->id ? $userPost = $user : "" ?><?php endforeach ?>
                    <a href="/postindividual?id=<?= $posts[$i]->id ?>">
                        <div class="imagem">
                            <img class="imgGrupo" src="<?=$posts[$i]->image; ?> " alt="Foto do post">
                            <div class="texto textoPost"><p><?= $posts[$i]->title;?></p></div>
                            <div class="autor">
                                <div class="elipse">
                                    <img class="userImagemLP" src="<?=$userPost->image; ?>" alt="Foto do usuário">
                                </div>
                                <div class="autortext">
                                    <p class="textoAutor"><?= $userPost->name;?></p>
                                    <p class="textoData"><?php $horario = new DateTime($posts[$i]->date);
                                        echo $horario->format('d/m/y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor;?>  
            </form>
          

            
        </div>
        <div class="botao1">
            <button><a href="./listaposts">VER MAIS</a></button>
        </div>
    </div>

    <?php require'footer.html'?>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../../../public/js/carrossel.js"></script>

</body>
</html>
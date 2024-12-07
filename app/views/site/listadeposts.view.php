<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HeartBeats</title>
    <link rel="stylesheet" href="/public/css/listadeposts.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php require 'navbar.html'?>
    <div class="posts">
      <div class="postG">
        <div class="topo">
          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar" />
            <img src="/public/assets/Vector.png" alt="" />
          </div>
          <p class="titulo">LISTA DE POSTS</p>
          <div class="invisivel"></div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="imagem">
          <img
            class="imgGrupo"
            src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
            alt=""
          />
          <div class="texto"><p>Titulo</p></div>
          <div class="content-autor">
            <div class="elipse"></div>
            <div class="autor">
              <p class="textoAutor">Autor</p>
              <p class="textoData">01/10/2024</p>
            </div>
          </div>
        </div>
        <div class="paginação">
          <button onclick="changePage(-1)" class="seta">←</button>
          <span class="page-number"><button class="button">1</button></span>
          <span class="page-number"><button class="button">2</button></span>
          <span class="page-number"><button class="button">3</button></span>
          <button onclick="changePage(1)" class="seta">→</button>
        </div>
      </div>
    </div>

    <?php require 'footer.html'?>
  </body>
</html>
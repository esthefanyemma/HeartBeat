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
    rel="stylesheet" />
</head>

<body>
  <?php require 'navbar.html' ?>
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
      <?php foreach ($posts as $post): ?>
        <a href="/postindividual?id=<?= $post->id ?>">
          <div class="imagem">
            <img
              class="imgGrupo"
              src="../../../public/assets/blackpink-pictures-qixlwlo1dfbuylad.jpg"
              alt="" />
            <div class="texto">
              <p><?php echo $post->title; ?></p>
            </div>
            <div class="content-autor">
              <div class="elipse"></div>
              <div class="autor">
                <p class="textoAutor"><?php foreach ($users as $user): ?><?= $post->author == $user->id ? $user->name : "" ?><?php endforeach ?></td>
                </p>
                <p class="textoData"><?php $horario = new DateTime($post->date);
                                      echo $horario->format('d/m/y'); ?></p>
              </div>
            </div>
          </div>
        </a>
      <?php endforeach ?>
    </div>
  </div>
  <div class="containerPaginacao">
    <div class="paginacao">
      <a href="?paginacaoNumero=<?= $page - 1 ?>" class="seta <?= $page <= 1 ? "disabled" : "" ?> ">←</a>
      <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
        <span class="page-number <?= $page_number == $page ? "active" : "" ?>"><a class="button"
            href="?paginacaoNumero=<?= $page_number ?>"><?= $page_number ?> </a></span>
      <?php endfor ?>
      <a href="?paginacaoNumero=<?= $page + 1 ?>" class="seta <?= $page >= $total_pages ? 'disabled' : "" ?> ">→</a>
    </div>
  </div>

  <?php require 'footer.html' ?>
</body>

</html>
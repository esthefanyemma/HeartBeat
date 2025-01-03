<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HeartBeats</title>
  <link rel="stylesheet" href="/public/css/listadeposts.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="shortcut icon" type="png" href="../../public/assets/heartBeats-logo.png">
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
        <form action="/listaposts" method="get">
          <input type="text" name="search" id="txtBusca" placeholder="Pesquisar" />
        </form>
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
              src="<?= $post->image?>" alt="Imagem da publicação"
              alt="" />
            <div class="texto">
              <p><?php echo $post->title; ?></p>
            </div>
            <div class="content-autor">
              <div class="elipse">
                <img class="userProfile" src="<?php foreach ($users as $user): ?><?= $post->author == $user->id ? $user->image : "" ?><?php endforeach ?>" alt="">
              </div>
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
      <a href="/listaposts?page=<?= $page == 1 ? $page : $page-1 ?><?= isset($search) ? $search : "" ?>"  class="seta <?= $page <= 1 ? "disabled" : "" ?> ">←</a>
      <?php for ($index = 1; $index <= $total_pages; $index++): ?>
        <span class="page-number <?= $index == $page ? "active" : "" ?>"><a class="button" href="/listaposts?page=<?= $index ?><?= isset($search) ? $search : "" ?>"><?= $index ?> </a></span>
      <?php endfor ?>
      <a href="/listaposts?page=<?= $page == $total_pages ? $page : $page+1 ?><?= isset($search) ? $search : "" ?>" class="seta <?= $page >= $total_pages ? 'disabled' : "" ?> ">→</a>
    </div>
  </div>

  <?php require 'footer.html' ?>
</body>

</html>
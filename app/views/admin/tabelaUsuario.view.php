<?php 
  session_start();
  if(!isset($_SESSION['id'])){
    header('Location: /login');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HeartBeats | Página de Usuários</title>
  <link rel="stylesheet" href="/public/css/tabelaUsuarioStyles.css " />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="shortcut icon" type="png" href="../../public/assets/heartBeats-logo.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap"
    rel="stylesheet" />
</head>

<body>
  <?php require 'modalCriarUser.view.php'; ?>
  <?php foreach ($users as $user):  ?>
    <?php ?>

  <?php endforeach; ?>

  <div class="overlay" onclick="fechaModal()"></div>
  <?php require 'sidebar.html' ?>
  <main class="mainTabelaUser">
    <div class="apresentacao">
      <div class="logo-TU">
        <img src="../../../public/assets/Logo.png" alt="Logo HeartBeats" />
        <h2>Tabela de Usuarios</h2>
      </div>
      <div class="btn-TU" onclick="abrirModal('criarUser')">
        <p>Criar</p>
        <i class="fa-solid fa-plus"></i>
      </div>
    </div>
    <div class="container-usuario">
      <table>
        <thead>
          <div class="container-busca">
            <div id="divBusca">
              <form action="/usuarios" method="get">
                <input type="text" name="search" id="txtBusca" placeholder="Pesquisar" />
              </form>
              <img src="/public/assets/Vector.png" alt="" />
            </div>
          </div>
          <tr style="border-bottom: 2px solid #bd7bd1">
            <th class="id-TU">ID</th>
            <th class="nome-TU">Nome</th>
            <th class="email-TU">Email</th>
            <th class="acoes-tr">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user):   ?>
            <tr>
              <td class="id-TU"><?= $user->id ?></td>
              <td class="nome-TU"><?= $user->name ?></td>
              <td class="email-TU"><?= $user->email ?></td>
              <td class="acoes-tr">
                <div class="acoes">
                  <div class="visualizar-TU" onclick="abrirModal('verusuario<?= $user->id ?>')">
                    <i class="fa-solid fa-eye"></i>
                  </div>
                  <div class="editar-TU" onclick="abrirModal('editarusuario<?= $user->id ?>')">
                    <i class="fa-solid fa-pencil"></i>
                  </div>
                  <div class="deletar-TU" onclick="abrirModal('deletarusuario<?= $user->id ?>')">
                    <i class="fa-solid fa-trash"></i>
                  </div>
                </div>
              </td>
            </tr>
            <?php require 'modalDeletarUser.view.php'; ?>
            <?php require 'modaleditarusuario.view.php'; ?>
            <?php require 'visualizarUser.view.php'; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="paginacao">
        <a href="/usuarios?page=<?= $page == 1 ? $page : $page - 1 ?><?= isset($search) ? $search : "" ?>" class="seta <?= $page <= 1 ? "disabled" : "" ?> ">←</a>
        <?php for ($index = 1; $index <= $total_pages; $index++): ?>
          <span class="page-number <?= $index == $page ? "active" : "" ?>"><a class="button" href="/usuarios?page=<?= $index ?><?= isset($search) ? $search : "" ?>"><?= $index ?> </a></span>
        <?php endfor ?>
        <a href="/usuarios?page=<?= $page == $total_pages ? $page : $page + 1 ?><?= isset($search) ? $search : "" ?>" class="seta <?= $page >= $total_pages ? 'disabled' : "" ?> ">→</a>
      </div>
    </div>
  </main>
</body>
<script
  src="https://kit.fontawesome.com/654def639f.js"
  crossorigin="anonymous"></script>
<script src="/public/js/modal.js"></script>

</html>
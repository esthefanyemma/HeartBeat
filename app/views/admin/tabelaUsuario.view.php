<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Publicações</title>
    <link rel="stylesheet" href="/public/css/tabelaUsuarioStyles.css " />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php require 'modalCriarUser.view.php'; ?>
    <?php foreach($users as $user):  ?>
    <?php ?>
    
    <?php endforeach; ?>

    <div class="overlay" onclick="fechaModal()"></div>
    <main>
        <div class="apresentacao">
          <div class="logo">
            <img src="../../../public/assets/Logo.png" alt="Logo HeartBeats" />
            <h2>Tabela de Usuarios</h2>
          </div>
          <div class="btn" onclick="abrirModal('criarUser')">
            <p>Criar</p>
            <i class="fa-solid fa-plus"></i>
          </div>
        </div>
        <div class="container-usuario">
          <table>
            <thead>
              <div class="container-busca">
                <div id="divBusca">
                  <img src="/public/assets/Vector.png" alt="" />
                  <input type="text" id="txtBusca" placeholder="Pesquisar" />
                </div>
              </div>
              <tr style="border-bottom: 2px solid #bd7bd1">
                <th class="id">ID</th>
                <th class="nome">Nome</th>
                <th class="email">Email</th>
                <th class="acoes-tr">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user):   ?>
              <tr>
                <td><?=$user->id ?></td>
                <td><?=$user->name ?></td>
                <td><?=$user->email ?></td>
                <td>
                  <div class="acoes">
                    <div class="visualizar" onclick="abrirModal('verusuario<?= $user->id?>')">
                      <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="editar" onclick="abrirModal('editarusuario<?= $user->id?>')">
                      <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div class="deletar" onclick="abrirModal('deletarusuario<?= $user->id?>')">
                      <i class="fa-solid fa-trash"></i>
                    </div>
                  </div>
                </td>
              </tr>
              <?php require 'modalDeletarUser.view.php';?>
              <?php  require 'modaleditarusuario.view.php';?>
              <?php  require 'visualizarUser.view.php';?>
              <?php endforeach; ?>
            </tbody>
          </table>
          <div class="paginacao">
            <button onclick="changePage(-1)" class="seta">←</button>
            <span class="page-number"><button class="button">1</button></span>
            <span class="page-number"><button class="button">2</button></span>
            <span class="page-number"><button class="button">3</button></span>
            <button onclick="changePage(1)" class="seta">→</button>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script
    src="https://kit.fontawesome.com/654def639f.js"
    crossorigin="anonymous"
  ></script>
  <script src="/public/js/modal.js"></script>
</html>

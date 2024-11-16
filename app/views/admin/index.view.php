<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Publicações</title>
    <link rel="stylesheet" href="/public/css/publicacoesStyle.css">
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
    <div class="overlay"></div>
    <main class="mainTabela">
        <div class="apresentacao">
          <div class="logo">
            <img src="/public/assets/HeartBeats_img.png" alt="Logo HeartBeats" />
            <h2>Tabela de Publicações</h2>
          </div>
          <div class="btn" onclick="abrirModal('modalCriarPost')">
            <p>Criar</p>
            <i class="fa-solid fa-plus"></i>
            <?php require(__DIR__.'/../admin/modalCriarPost.view.php');?>
          </div>
        </div>
        <div class="container-usuario">
          <table>
            <thead>
              <div class="container-busca">
                <div id="divBuscaPubli">
                  <i class="fa-solid fa-magnifying-glass"></i> 
                  <input type="text" id="txtBuscaPubli" placeholder="Pesquisar" />
                </div>
              </div>
              <tr style="border-bottom: 2px solid #bd7bd1">
                <th class="id">ID</th>
                <th class="titulo">Título</th>
                <th class="autor">Autor</th>
                <th class="data">Data de criação</th>
                <th class="acoes-tr">Ações</th>
              </tr>     
            </thead>
            <tbody>
              <tr>
                <?php foreach($posts as $post):?>
                <td class="id"><?php echo $post->id; ?></td>
                <td class="titulo"><?php echo $post->title; ?></td>
                <td class="autor"><?php echo $post->author; ?></td> <!-- Tem que ver melhor isso aqui para aparecer o nome do autor e não o id -->         
                <td class="data"><?php echo $post->date; ?></td>
                <td class="acoes-tr">
                  <div class="acoes">
                    <div class="visualizar" onclick="abrirModal('modalVerPost')">
                      <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="editar" onclick="abrirModal('modalEditPost')">
                      <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div class="deletar" onclick="abrirModal('cancelar2')">
                      <i class="fa-solid fa-trash"></i>
                    </div>
                  </div>
                </td>

                  <!-- Modais -->
                  <?php require(__DIR__.'/../admin/modalVisualizarPost.view.php');?>
                  <?php require(__DIR__.'/../admin/modalEditarPost.view.php');?>
                  <?php require(__DIR__.'/../admin/modalDeletarPost.view.php');?>
                  

                <?php endforeach;?>
              </tr>
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

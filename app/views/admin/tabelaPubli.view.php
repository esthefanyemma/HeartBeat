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
     rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
     href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap"
     rel="stylesheet" />
 </head>

 <body>
   <div class="overlay" onclick="fechaModal()"></div>
   <main>
     <div class="mainTabela">
       <div class="apresentacao">
         <div class="logo">
           <img src="/public/assets/HeartBeats_img.png" alt="Logo HeartBeats" />
           <h2>Tabela de Publicações</h2>
         </div>
         <div class="btn" onclick="abrirModal('modalCriarPost')">
           <p>Criar</p>
           <i class="fa-solid fa-plus"></i>
           <?php foreach ($users as $user): ?>
             <?php require(__DIR__ . '/../admin/modalCriarPost.view.php'); ?>
           <?php endforeach ?>
         </div>
       </div>
       <div class="container-usuario">
         <table>
           <thead>
             <div class="container-busca">
               <div id="divBuscaPubli">
                 <input type="text" id="txtBuscaPubli" placeholder="Pesquisar" />
                 <i class="fa-solid fa-magnifying-glass"></i>
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
             <?php foreach ($posts as $post): ?>
               <tr>
                 <td class="id"><?php echo $post->id; ?></td>
                 <td class="titulo">
                   <p><?php echo $post->title; ?></p>
                 </td>
                 <td class="autor"><?php foreach ($users as $user): ?><?= $post->author == $user->id ? $user->name : "" ?><?php endforeach ?></td> <!-- Tem que ver melhor isso aqui para aparecer o nome do autor e não o id -->
                 <!-- <td class="data"><?php echo $post->date; ?></td> -->
                 <td class="data"><?php
                                  $horario = new DateTime($post->date);
                                  echo $horario->format('d/m/y');
                                  ?></td>
                 <td class="acoes-tr">
                   <div class="acoes">
                     <div class="visualizar" onclick="abrirModal('modalVerPost<?= $post->id ?>')">
                       <i class="fa-solid fa-eye"></i>
                     </div>
                     <div class="editar" onclick="abrirModal('modalEditPost<?= $post->id ?>')">
                       <i class="fa-solid fa-pencil"></i>
                     </div>
                     <div class="deletar" onclick="abrirModal('cancelar2<?= $post->id ?>')">
                       <i class="fa-solid fa-trash"></i>
                     </div>
                   </div>
                 </td>

                 <!-- Modais -->
                 <?php foreach ($users as $user): ?>
                   <?php require(__DIR__ . '/../admin/modalVisualizarPost.view.php'); ?>
                   <?php require(__DIR__ . '/../admin/modalEditarPost.view.php'); ?>
                 <?php endforeach ?>
                 <?php require(__DIR__ . '/../admin/modalDeletarPost.view.php'); ?>

               </tr>
             <?php endforeach; ?>
           </tbody>
         </table>
         <div class="paginacao">
           <a href="?paginacaoNumero=<?= $page - 1 ?>" class="seta <?= $page <= 1 ? "disabled" : "" ?> ">←</a>
           <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
             <span class="page-number <?= $page_number == $page ? "active" : "" ?>"><a class="button"
                 href="?paginacaoNumero=<?= $page_number ?>"><?= $page_number ?> </a></span>
           <?php endfor ?>
           <a href="?paginacaoNumero=<?= $page + 1 ?>" class="seta <?= $page >= $total_pages ? 'disabled' : "" ?> ">→</a>
         </div>
       </div>
     </div>
   </main>
 </body>
 <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
 <script src="/public/js/modal.js"></script>

 </html>
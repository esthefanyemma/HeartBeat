<?php
  $postObject = $post[0];
  $userObject = $user[0];
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post Indiuvidual</title>
    <link rel="stylesheet" href="../../../public/css/postIndividualStyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main class="mainPostIndividual">
      <div class="containerTitlePage">
        <h1>Post Individual</h1>
      </div>
      <div class="container">
        <div class="containerImage">
          <img src="<?= $postObject->image?>" alt="Imagem da publicação">
        </div>
        <div class="containerPost">
          <h1><?= $postObject->title;?></h1>
          <div class="containerAutor">
            <div class="elipse"></div>
            <div class="autor">
              <h3><?= $userObject->name?></h3>
              <h2><?= $postObject->date;?></h2>
            </div>
          </div>
          <p><?= $postObject->description;?></p>
        </div>
      </div>
    </main>
  </body>
</html>

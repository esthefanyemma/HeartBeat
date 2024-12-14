<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/modaldeletarpost.css">
    <title>Modal</title>
</head>
<body>
    <div class="modaldp modal" id="cancelar2<?= $post->id?>">
        <div class="modal2">
            <form method="POST" action="/posts/delete">
                <p class="cancelarTexto">
                    Tem certeza que deseja deletar este post?
                </p>
                <input type="hidden" name="id" value="<?= $post->id?>">
                <div class="botoesdp">
                    <button type="submit">Confirmar</button>
                    <button onclick="fechaModal()" type="button" id="opacidadebtncancelpost">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
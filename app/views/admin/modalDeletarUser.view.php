<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/modalDeletarUser.css">
    <title>Modal</title>
</head>
<body>
    <div class="modaldu modal" id="deletarusuario<?= $user->id?>">
        <form class="modal_deletar" method="POST" action="/usuarios/deleta">
            <input type="hidden" name="id" value="<?= $user->id?>">
            <p class="cancelarTexto">
                Tem certeza que deseja deletar este usuário?
            </p>
            <div class="botoes_del">
                <button type="submit">Confirmar</button>
                <button type="button" onclick="fechaModal()">Cancelar</button>
            </div>
        </form>
    </div>
        <script src="/public/js/modal.js"></script>
</body>
</html>
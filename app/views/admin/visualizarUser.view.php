<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Beats - Modal Visualizar Usuário</title>
    <link rel="stylesheet" href="/public/css/vizualizarUserStyle.css">
</head>
<body>
    <div class="modal modalv" id="verusuario">
        <div class="modalVerUser">
        <div class="imagemUser">
            <img src="/public/assets/foto-user.jpg" alt="">
        </div>
        <div class="conteudoVerUser">
            <header></header>
            <div class="infosVerUser">
                <h1>Anônimo da Silva</h1>
                <p>#1234</p>
                <span><i class="fa-regular fa-envelope"></i> email@gmail.com</span>
            </div>
        </div>
        <div class="containerBotao">
            <button onclick="fechaModal()" class="btnVerUser">Sair</button>
        </div>
    </div>
    </div>
    <div class="fundoVisualizar"></div>

</body>
<script src="/public/js/modal.js"></script>
    <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
</html>
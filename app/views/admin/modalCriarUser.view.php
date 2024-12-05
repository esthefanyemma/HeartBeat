<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal criar usuário</title>
    <link rel="stylesheet" href="/public/css/modalCriarUserStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
</head>

<body>
    <main class="mainModalCriaUser">
        <div class="modalCriar-CU modal" id="criarUser">
            <form id="criarUser" action="usuarios/criar" method="post" enctype="multipart/form-data">
                <div class="img-entrada-CU">
                    <label>
                        <div class="escuro"><img src="../../../public/assets/pencil-alt.svg" alt=""></div>
                        <input type="file" accept="image/*" name="imagem" class="img-inp-CU" required>
                        <div class="containerProfileImg">
                            <img class="profileImg" src="../../../public/assets/profile-picture-973460_1280.webp" alt="">
                        </div>
                    </label>
                </div>
                <header class="titulo-CU">
                </header>
                <div class="info-usuario-CU">
                    <div class="campoEntrada-CU">
                        <div class="formularios-CU">
                            <label class="nomecampos-CU">Nome:</label>
                            <p id="error" style="color: red; display: none;">*O campo não pode conter apenas números!</p>
                            <input type="text" name="nome" placeholder="HeartBeats Da Silva" required>
                        </div>
                        <div class="formularios-CU">
                            <label class="nomecampos-CU">Email:</label>
                            <input type="email" name="email" placeholder="heartbeats@exemplo.com" required>
                        </div>
                        <div id="formularioSenha-CU">
                            <label class="nomecampos-CU">Senha:</label>
                            <div class="inputSenha-CU">
                                <input type="password" name="senha" placeholder="***********" required id="input-CU" >
                                <i class="fa-solid fa-eye" onclick="toggleSenha('input-CU')"></i>
                            </div>
                        </div>
                    </div>
                    <div class="btns-edit-CU">
                        <button type="submit">Criar</button>
                        <button type="button" onclick="fechaModal()">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://kit.fontawesome.com/654def639f.js" crossorigin="anonymous"></script>
        <script src="/public/js/modal.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const painel = document.querySelector('.img-entrada-CU');
                const inputImagem = painel.querySelector('input[type="file"]');
                const spanImage = painel.querySelector('.profileImg');
                const icone = painel.querySelector('.escuro img');

                if (inputImagem) {
                    inputImagem.addEventListener('change', function(e) {
                        const inputTarget = e.target;
                        const arquivo = inputTarget.files[0];

                        if (arquivo) {
                            const reader = new FileReader();
                            reader.addEventListener('load', function(e) {
                                const readerTarget = e.target;

                                spanImage.src = readerTarget.result;
                                icone.style.display = 'none';
                            });

                            reader.readAsDataURL(arquivo);
                        } else {
                            spanImage.src = "../../../public/assets/profile-picture-973460_1280.webp";
                            icone.style.display = 'block';
                        }
                    });
                }
            });

            function toggleSenha(idInput){
                let input = document.getElementById(idInput);
                if(input.type === 'password')
                    input.type = 'text';
                else
                    input.type = 'password';
            }

            const form = document.getElementById('criarUser');
            const inputNome = form.querySelector('input[name="nome"]');
            const mensagemErro = document.getElementById('error');
            
            form.addEventListener('submit', (event) => {
                const value = inputNome.value.trim();
                if(/^ \d + $/.test(value)){
                    event.preventDefault();
                    mensagemErro.style.display = 'block';
                }
                else{
                    mensagemErro.style.display = 'none';
                }
            });

        </script>
    </main>
</body>

</html>
function abrirModal(id) {
    console.log("Entrou")
    document.getElementById(id).style.display = 'block';
    document.querySelector(`.overlay`).style.display = 'block';
}

function fechaModal() { 
    document.querySelectorAll('.modal').forEach((modal) => {
        modal.style.display = 'none';
    });
    document.querySelector(`.overlay`).style.display = 'none';
}

const painel = document.querySelector('.imagemCriar');
const escrito = painel.querySelector('span');
        // console.log(span1)
        // console.log(label1);
const inputImagem = document.getElementById('adcImage');
        // console.log(inputImagem);
inputImagem.addEventListener('change', function(){
            escrito.innerHTML = "Imagem selecionada"; 
            painel.style.color = "#88c8ee";
})
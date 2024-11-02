const menu = document.querySelector('.modalNav');
const fundo =  document.querySelector('.tela');

function openNav(){
    menu.style.display = "flex";
    fundo.style.display = "flex";
}

function closeNav(){
    menu.style.display = "none";
    fundo.style.display = "none";
}


//Função para quando clicar fora também sair da navbar
document.addEventListener('mousedown',(e)=>{
    if(!menu.contains(e.target)){
        closeNav();
    }
})
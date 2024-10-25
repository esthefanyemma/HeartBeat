const side = document.querySelector('.sidebar');

function abrir(){
    side.style.display = "flex";
}

function fechar(){
    side.style.display = "none";
}

document.addEventListener('mousedown',(e)=>{
    if(!side.contains(e.target)&&!document.querySelector('.bi-list').contains(e.target)){
        fechar();
    }
});

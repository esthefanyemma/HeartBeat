const modal = document.querySelector('.modal');
const titulo = modal.querySelector(".titulo > h1");
const texto = modal.querySelector("p");
const fundo =  document.querySelector('.tela');

function openModal(idModal){
    modal.style.display = "flex";
    fundo.style.display = "flex";
    console.log("Entrou")

    if(idModal === 'missao'){  
        titulo.innerHTML = "Missão";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Missão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?"
        // modal.style.left = "32%";
    }
    else if(idModal === 'visao'){
        titulo.innerHTML = "Visão";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Visão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?";
        // modal.style.left = "38%";
        
    }
    else{
        titulo.innerHTML = "Valores";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Visão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?";
        // modal.style.left = "50%";
    }
}

function closeModal(){
    modal.style.display = "none";
    fundo.style.display = "none";
}

document.addEventListener('mousedown',(e)=>{
    if(!modal.contains(e.target)){
        closeModal();
    }
})
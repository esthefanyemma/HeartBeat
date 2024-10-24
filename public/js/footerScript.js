const modal = document.querySelector('.modal');
const titulo = modal.querySelector(".titulo > h1");
const texto = modal.querySelector("p");

function openModal(idModal){
    modal.style.display = "flex";
    if(idModal === 'missao'){  
        titulo.innerHTML = "Missão";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Missão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?"
    }
    else if(idModal === 'visao'){
        titulo.innerHTML = "Visão";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Visão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?";
        
    }
    else{
        titulo.innerHTML = "Valores";
        texto.innerHTML = "Esse é um texto para utilizar no modal de Visão Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis in quos ipsam odit similique deserunt cupiditate incidunt excepturi non consectetur exercitationem amet explicabo, porro voluptatum voluptatem esse ratione recusandae quis?";
    }
}
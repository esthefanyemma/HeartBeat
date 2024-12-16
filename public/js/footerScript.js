const modal = document.querySelector('.modalFooter');
const titulo = modal.querySelector(".tituloModalFooter > h1");
const texto = modal.querySelector("p");
const fundoFooter =  document.querySelector('.tela');
// console.log("Entrou")

function openModal(idModal){
    modal.style.display = "block";
    fundoFooter.style.display = "flex";
    console.log("Entrou")

    if(idModal === 'missao'){  
        titulo.innerHTML = "Missão";
        texto.innerHTML = "No nosso blog, vivemos e respiramos K-pop! Nossa missão é criar um espaço acolhedor e vibrante para fãs apaixonados compartilharem sua admiração por essa incrível cultura. Queremos conectar pessoas através de notícias, curiosidades, análises de álbuns, coberturas de eventos e conteúdos especiais que celebram a diversidade e o talento dos artistas de K-pop.Acreditamos no poder da música para unir, inspirar e emocionar, e estamos comprometidos em oferecer conteúdo de qualidade para enriquecer a experiência de cada fã. Seja você um veterano no fandom ou alguém descobrindo o K-pop agora, este é o seu lugar."
        // modal.style.left = "32%";
    }
    else if(idModal === 'visao'){
        titulo.innerHTML = "Visão";
        texto.innerHTML = "Tornar-se uma referência global em conteúdo sobre K-pop, criando um espaço onde fãs de todo o mundo possam se conectar, aprender e celebrar essa cultura. Queremos ser reconhecidos como um ponto de encontro digital que promove inclusão, paixão e a valorização da música e dos artistas que inspiram milhões.";
        // modal.style.left = "38%";
        
    }
    else{
        titulo.innerHTML = "Valores";
        texto.innerHTML = "No nosso blog, acreditamos que o K-pop é mais do que música — é uma forma de unir pessoas e inspirar emoções. Por isso, promovemos a inclusão e o respeito, criando um espaço onde todos os fãs, independentemente de sua origem, possam se sentir acolhidos. Nossa paixão pela música nos guia em cada conteúdo que produzimos, sempre com autenticidade, qualidade e compromisso com a verdade. Queremos ser um ponto de conexão, onde as histórias, as emoções e o amor pelo K-pop possam ser compartilhados e celebrados.";
        // modal.style.left = "50%";
    }
}

function closeModal(){
    modal.style.display = "none";
    fundoFooter.style.display = "none";
}

document.addEventListener('mousedown',(e)=>{
    if(!modal.contains(e.target)){
        closeModal();
    }
    closeModal();
})
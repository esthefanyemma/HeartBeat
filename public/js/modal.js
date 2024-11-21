function abrirModal(id) {
    console.log("Entrou")
    document.getElementById(id).style.display = 'block';
    document.querySelector(`.overlay`).style.display = 'block';
}

function fechaModal() { 
    document.querySelectorAll('.modal').forEach((modal) => {
        modal.style.display = 'none';
        console.log("Chamou")
    });
    document.querySelector(`.overlay`).style.display = 'none';
}

    
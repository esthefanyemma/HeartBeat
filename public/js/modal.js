function abrirModal(id) {
    document.getElementById(id).style.display = 'block';
    document.querySelector(`.overlay`).style.display = 'block';
}

function fechaModal() { 
    document.querySelectorAll('.modal').forEach((modal) => {
        modal.style.display = 'none';
    });
    document.querySelector(`.overlay`).style.display = 'none';
}
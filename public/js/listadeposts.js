

let currentPage = 1;

function changePage(direction) {
    const pageNumberElement = document.querySelector('.page-number');
    currentPage += direction;

  
    if (currentPage < 1) {
        currentPage = 1;
    }

    pageNumberElement.textContent = currentPage;
}

async function carregaCont(pag){
    const contentDiv = document.querySelector('.container');
    fetch(`../app/services/apiPaginacao.php?page=${pag}`)
        .then(response => response.json())
        .then(data => {
            contentDiv.innerHTML = data.content;
        })
        .catch(error => console.error('Erro:', error));
}
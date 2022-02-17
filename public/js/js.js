async function subir() {
    let formELem = document.querySelector('#formElem_anyadir');

    let response = await fetch('/api/productos', {
        method: 'POST',
        body: new FormData(formElem)
    });
    console.log(response);
    let result = await response.json();
    console.log(result);
}

funtion sube(event) {
    event.preventDefault();
    subir();
}
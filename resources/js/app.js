require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
//Navegador
function myFunction() {

    var x = document.querySelector("#myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
window.myFunction = myFunction;

//Me falta acabarlo pero funciona
const btnEnviar = document.querySelector('#btn-enviar');
const validate = (e) => {
    e.preventDefault();
    const nombre = document.querySelector('#name');
    const nif = document.querySelector('#nif');
    const email = document.querySelector('#email');
    const password = document.querySelector('#password');
    const password_confirmation = document.querySelector('#password_confirmation');
    const nombreDeUsuario = document.querySelector('#username');
    const formulario = document.querySelector('#formulario');
    if (nombreDeUsuario.textContent === "") {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'El nombre no es corecto';
        formulario.prepend(div);
    }
    if (nif.textContent === "") {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'El nif no es correcto';
        formulario.prepend(div);
    }
    if (nombre.textContent === "") {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'El username no es corecto';
        formulario.prepend(div);
    }
    if (email.textContent === "") {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'El email no es corecto';
        formulario.prepend(div);
    }
    if (password.textContent === "") {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'La conttraseña no es corecta';
        formulario.prepend(div);
    }
    if (password.textContent !== password_confirmation.textContent) {
        let div = document.createElement('div');
        div.classList.add('error');
        Object.assign(div.style, {
            width: '100%',
            height: '20%',
            backgroundColor: '#ffd1d1',
            color: 'black',
        });
        div.textContent = 'La contraseña no es igual';
        formulario.prepend(div);
    }
    return true;
}

btnEnviar.addEventListener('click', validate);

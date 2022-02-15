require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//Validaciones de formulario de registro.
//Recogemos el boton de enviar
/*const btnEnviar = document.querySelector('#btn-enviar');
let div = document.createElement('div');
div.classList.add('error');
let botonCSS = {
    width: '100%',
    height: '20%',
    backgroundColor: '#ffd1d1',
    color: 'black',
    border: '1px solid red',
    marginBottom: '5px',
}
Object.assign(div.style, botonCSS);
const validate = (e) => {
        e.preventDefault();
        let form = document.forms[0];
        //Estilo para los errores

        //Validacion del username
        if (form.username.value.length === 0) {
            div.textContent = 'El Username esta vacio';
            formulario.prepend(div);
            //Mostrara los errores por x tiempo.
            setTimeout(() => div.remove(), 2000);

        } else {
            if (form.username.value.length <= 4) {
                div.textContent = 'El Username debe tener mas de 4 caracteres';
                formulario.prepend(div);
                setTimeout(() => div.remove(), 2000);
            }
        }
        if (form.nif.value.length != 9) {
            div.textContent = 'El nif no es correcto';
            formulario.prepend(div);
            setTimeout(() => div.remove(), 2000);
        } else {
            for (let i = 0; i < form.nif.value.length; i++) {
                if (i <= 7) {
                    if (form.nif.value[i].isNaN() === true) {
                        continue;
                    } else {
                        div.textContent = 'El nif no esta en el formato correcto';
                        formulario.prepend(div);
                        setTimeout(() => div.remove(), 2000);

                    }
                } else {
                    if (form.nif.value[i].isNaN() === false) {
                        continue;
                    } else {
                        div.textContent = 'El nif no esta en el formato correcto';
                        formulario.prepend(div);
                        setTimeout(() => div.remove(), 2000);

                    }
                }
            }

        }
        if (form.name.value.length === 0) {
            div.textContent = 'El nombre esta vacio';
            formulario.prepend(div);
            setTimeout(() => div.remove(), 2000);
        }
        if (form.email.value.length === 0) {
            div.textContent = 'El email esta vacio';
            formulario.prepend(div);
            setTimeout(() => div.remove(), 2000);
        }
        if (form.password.value.length === 0) {
            div.textContent = 'La conttraseña esta vacia';
            formulario.prepend(div);
            setTimeout(() => div.remove(), 2000);
        }
        if (form.password_confirm.value.length === 0) {
            div.textContent = 'La contraseña esta vacia';
            formulario.prepend(div);
            setTimeout(() => div.remove(), 2000);
        }
        return true;
    }
    //Evento del boton
btnEnviar.addEventListener('click', validate);

//Añadir al carrito
let listaCarrito = {};

/*function agregarProductoCarrito(idProducto,
    unidades,
    precio) {
    this.idProducto = idProducto;
    this.unidades = unidades;
    this.precio = precio;

    listaCarrito = { IdProducto: this.idProducto, unidades: this.unidades, precio: this.precio };
}*/

//El administrados gestiona productos.
/*
const formElem = document.querySelector('#formElem_anyadir');
formElem.onsubmit = async(e) => {
    e.preventDefault();

    let response = await fetch('api/productos', {
        method: 'POST',
        body: new FormData(formElem)
    });

    let result = await response.json();
};


*/

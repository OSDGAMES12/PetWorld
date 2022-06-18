
const formulario= document.getElementById('Formulario');
const inputs = document.querySelectorAll('#Formulario input')

const expresiones = {

    nombre: /^[a-zA-Z0-9\_\-] {15-30}$/,
    correo: /^[a-z0-9_-] + @[a-z0-9] + \.[a-z0-9] {20-30}$/, //FORMATO PARA CORREO
    telefono: /^\d{10-13}$/,
    contraseña: /^[a-zA-Z0-9] {10-15}$/,
    ocupacion: /^[a-zA-Z0-9] {15-20}$/,
    edad: /{1-2}/

}

inputs.forEach((input) => {

    inputs.addEventListener('keyup', () =>{

        console.log('tecla levantada');

    });

})

formulario.addEventListener("submit", (e) =>{

    e.preventDefault();

})
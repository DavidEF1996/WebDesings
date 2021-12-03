document.addEventListener('DOMContentLoaded', function () {
    crearGaleria(); //se llama a esta funcion cuando el documento este cargado
});

function crearGaleria() {
    const galeria = document.querySelector('.galeria-imagenes'); //se selecciona el contenedor de galeria-imagenes la lista

    for (let i = 1; i <= 12; i++) {
        //Como tenemos doce imagenes, corremos el for hasta 12
        const imagen = document.createElement('IMG'); //creamos una imagen en cada iteracion del for
        imagen.src = `build/img/thumb/${i}.webp`; //le agregamos la imagen al elemento creado
        //console.log(imagen);//mostramos en consola la estructura
        imagen.dataset.imagenId = i; // esto le agrega un atritubo de id para poderle reconocer y usar en la funcion de mostrar imagen

        // Añadir la funcion de MostrarImagen
        imagen.onclick = mostrarImagen; // se agrega un evento a el elemento imagen que creamos y le pasamos la funcion



        const lista = document.createElement('LI'); //Creo el elemento lista donde va a mostrarse la imagen
        lista.appendChild(imagen); //agregamos la imagen al elemento
        galeria.appendChild(lista);// luego cargamos el elemento lista a la lista principal del html

    }
}



function mostrarImagen(e) {
    //console.log('distre click');
    //console.log(e.target.dataset.imagenId); //Muestra el id de la imagen en la lista

    const id = parseInt(e.target.dataset.imagenId); //obtenemos el id en numero

    const imagen = document.createElement('IMG'); //creamos el nuevo elemento imagen donde se va a mostrar
    imagen.src = `build/img/grande/${id}.webp`;//Cargamos la imagen al nuevo elemento segun el id que coincida

    const overlay = document.createElement('DIV'); //elemento con ese efecto oscuro que contendra la imagen
    overlay.appendChild(imagen); //se carga a ese div el elemento imgagen
    overlay.classList.add('overlay'); // creamos la clase al elemento nuevo que tiene la imagen para darle estilos

    //Cuando se da click en cualquier parte de afuera de la imagen cerrar  la imagen
    overlay.onclick= function(){
        overlay.remove();
    }


    //Boton para cerrar la imagen
    const cerrarImagen = document.createElement('P'); //creamos el parrafo que tendrá la x de cerra
    cerrarImagen.textContent = 'X'; // agregamos la X 
    cerrarImagen.classList.add('btn-cerrar'); //AGREGamos la clase para darle estilos

    cerrarImagen.onclick = function () { //Evento cuando se da click en la X
        overlay.remove();
    };


    overlay.appendChild(cerrarImagen); //agregamos todo a el nuevo div overlay


    //Mostrar en el html lo siguiente:
    const body = document.querySelector('body'); // seleccionamos el body del html
    body.appendChild(overlay); //cargamos al body dicho elemento
    body.classList.add('fijar-body');// se agrega esta clase al body para eliminar el efecto de scroll cuando se hace click en imagen

}
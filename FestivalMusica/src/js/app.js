document.addEventListener('DOMContentLoaded', function () {
    scrollNav();

    navegacionFija();
});



function navegacionFija() {

    const barra = document.querySelector('.header');
    const informacion = document.querySelector('body');
    //Registrar el intersection observer (revisa si el elemento esta visible en la ventana del navegador)
    const observer = new IntersectionObserver(function (entries) {
        barra.classList.add('fijo');
        if (entries[0].isIntersecting) {

            barra.classList.remove('fijo'); //Cuando es visible se borra la clase de fijo 


        } else {

            barra.classList.add('fijo'); // Cuando no es visible se le agrega para darle el efecto de fijar la barra

        }
    });

    //Elemento a observar
    observer.observe(document.querySelector('.informacion-contenido'));
}



//esta función sirve para dar efecto de escroll a la navegación automática
function scrollNav() {
    console.log('llegue');
    const enlaces = document.querySelectorAll('.navegacion-principal a'); // todos los enlaces de la navegacion principal


    //No se puede dar un evenlistener a una lista de elementos, se tiene que dar  a uno solo 
    //para ello usamos for each

    enlaces.forEach(function (enlace) { //iteramos cada enlace
        enlace.addEventListener('click', function (e) { //le agregamos la accion de click y le pasamoe el evento e para darle nuestro propio evento

            e.preventDefault();
            const seccion = document.querySelector(e.target.attributes.href.value); // nos da el valor de la seccion a la que estamos dando click
            seccion.scrollIntoView({
                behavior: 'smooth', //hace que se navegue de forma lenta pero en Chrome no esta funcioanndo
            });
        });

    });



}

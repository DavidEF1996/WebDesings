document.addEventListener("DOMContentLoaded", function () {
  //Este es el evento principal, aplicara todas las funciones js cuando el documento
  //haya cargado toddos los html, css, etc

  eventListeners();
  //  darkMode();
});

function eventListeners() {
  //esta funcion da eventos a los diferentes elemetnso
  const mobileMenu = document.querySelector(".mobile-menu"); //obtenemos el menu hamburguesa
  mobileMenu.addEventListener("click", (e) => {
    //le damos una accion de click y cuando esto pase llamamos a la funcion navegacionResponsive();

    navegacionResponsive();
  });
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion"); //obtenemos ahora el menu de navegacion

  if (navegacion.classList.contains("mostrar")) {
    //si navegacion contiene la etiqueta de mostrar la va a remover, esto para que oculte el menu
    navegacion.classList.remove("mostrar");
  } else {
    navegacion.classList.add("mostrar"); //caso contrario la va a agregar para que muestre el menu
  }
}

function darkMode() {
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  // console.log(prefiereDarkMode.matches);

  if (prefiereDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  prefiereDarkMode.addEventListener("change", function () {
    if (prefiereDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });
  const variableDark = document.querySelector(".dark-mode-boton");

  variableDark.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });
}

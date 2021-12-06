const contacto = document.querySelector(".imagen-contacto");
const botonOcultar = document.querySelector(".botonOcultar");
const botonMostrar = document.querySelector(".botonMostrar");
const tablaOcultar = document.querySelector("#tabla");

if (botonMostrar != null && botonOcultar != null) {
  botonOcultar.addEventListener("click", (e) => {
    e.preventDefault();

    tablaOcultar.style.display = "none";
    botonOcultar.style.display = "none";
    botonMostrar.style.display = "block";
  });

  botonMostrar.addEventListener("click", (e) => {
    e.preventDefault();

    tablaOcultar.style.display = "inline";
    botonOcultar.style.display = "block";
    botonMostrar.style.display = "none";
  });
}

document.addEventListener("DOMContentLoaded", function () {
  //Este es el evento principal, aplicara todas las funciones js cuando el documento
  //haya cargado toddos los html, css, etc

  eventListeners();

  if ((botonOcultar != null) & (botonMostrar != null)) {
    tablaHorarios();
    botonOcultar.style.display = "none";
    tablaOcultar.style.display = "none";
  }

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
  console.log("doy click");
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

function tablaHorarios() {
  const tabla = document.querySelector("#tabla");
  console.log(tabla.rows[0].cells[1].innerText);

  console.log(new Date(new Date()).getDay());

  for (let index = 0; index < 6; index++) {
    if (new Date(new Date()).getDay() == 0) {
      tabla.rows[0].cells[1].style.color = "red";
    } else if (new Date(new Date()).getDay() == 1) {
      tabla.rows[1].cells[1].style.color = "red";
    } else if (new Date(new Date()).getDay() == 2) {
      tabla.rows[2].cells[1].style.color = "red";
    } else if (new Date(new Date()).getDay() == 3) {
      tabla.rows[3].cells[1].style.color = "red";
    } else if (new Date(new Date()).getDay() == 4) {
      tabla.rows[4].cells[1].style.color = "red";
    } else if (new Date(new Date()).getDay() == 5) {
      tabla.rows[5].cells[1].style.color = "red";
    } else {
      tabla.rows[6].cells[1].style.color = "red";
    }
  }
  /*for (var i = 0, row; (row = tabla.rows[i]); i++) {
    //iterate through rows
    //rows would be accessed using the "row" variable assigned in the for loop
    for (var j = 0, col; (col = row.cells[0]); j++) {
      //iterate through columns
      console.log("----------");
      console.log(row.cells[i].innerText);
    }
  }*/
}

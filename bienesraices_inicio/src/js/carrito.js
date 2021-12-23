const listaProductos = document.querySelector(".productos");
const contenedorCarrito = document.querySelector("#lista-carrito tbody");
let arregloProductos = [];

principal();
function principal() {
  document.addEventListener("DOMContentLoaded", () => {
    console.log("me estoy iniciando");
    arregloProductos = JSON.parse(localStorage.getItem("produ")) || [];
    console.log(arregloProductos);
    if (contenedorCarrito) {
      crearFilaCarrito();
    }
  });
  if (contenedorCarrito && listaProductos) {
    listaProductos.addEventListener("click", extraer);
  }
}

function extraer(e) {
  e.preventDefault();

  if (e.target.classList.contains("agregar-carrito")) {
    const valores = e.target.parentElement;

    datos(valores);
  }
}

function datos(valores) {
  const productoSeleccionado = {
    imagen: valores.querySelector(".imagePrincipal").src,
    titulo: valores.querySelector("h1").textContent,
    id: valores.querySelector("a").getAttribute("data-id"),
    cantidad: 1,
  };
  const existe = arregloProductos.some(
    (produ) => produ.id === productoSeleccionado.id
  ); //retorna true o false

  if (existe) {
    const cantidad = arregloProductos.map((produ) => {
      if (produ.id === productoSeleccionado.id) {
        produ.cantidad++;
        return produ;
      } else {
        return produ;
      }
    });

    arregloProductos = [...cantidad];
  } else {
    arregloProductos = [...arregloProductos, productoSeleccionado];
  }

  console.log(arregloProductos);

  if (contenedorCarrito) {
    almacenarMemoria();
    crearFilaCarrito(arregloProductos);
  }
}

function crearFilaCarrito() {
  //limpiar();
  arregloProductos.forEach((element) => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
        <td>
        <img src="${element.imagen}" alt="imagen">  
        </td>
      <td> ${element.titulo}</td>
      
      <td> ${element.cantidad}</td>
      <td> <a href="#" class="borrar-curso" data-id="${element.id}"> X </a> </>
        `;
    if (contenedorCarrito) {
      contenedorCarrito.appendChild(fila);
    }
  });
}

function almacenarMemoria() {
  localStorage.setItem("produ", JSON.stringify(arregloProductos));
}

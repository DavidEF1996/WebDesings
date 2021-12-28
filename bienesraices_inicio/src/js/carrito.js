const listaProductos = document.querySelector(".productos");
const contenedorCarrito = document.querySelector("#lista-carrito tbody");
const carrito = document.querySelector("#carrito");
let arregloProductos = [];

principal();
function principal() {
  carrito.addEventListener("click", EliminarProducto);
  document.addEventListener("DOMContentLoaded", () => {
    console.log("me estoy iniciando");
    arregloProductos = JSON.parse(localStorage.getItem("produ")) || [];
    console.log(arregloProductos);
    if (contenedorCarrito) {
      limpiar();
      crearFilaCarrito();
    }
    /* limpiar();
    crearFilaCarrito();*/
  });
  if (listaProductos) {
    console.log("Existen");
    listaProductos.addEventListener("click", extraer);
  } else {
    console.log("No existen");
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

  almacenarMemoria();
  crearFilaCarrito(arregloProductos);
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

function EliminarProducto(e) {
  limpiar();
  e.stopPropagation();
  let arre = [];
  if (e.target.classList.contains("borrar-curso")) {
    const aux = e.target.getAttribute("data-id");
    const nuevo = arregloProductos.map((produ) => {
      if (produ.id === aux && produ.cantidad > 1) {
        produ.cantidad--;
        arre = [...arre, produ];
      }
    });

    console.log("/");
    console.log(arre);
    console.log("/");

    if (arre.length > 0) {
      arre.cantidad--;
      let arr = arregloProductos.filter((producto) => producto.id !== aux);
      arregloProductos = [...arr, ...arre];
      localStorage.setItem("produ", JSON.stringify(arregloProductos));
    } else {
      let arr = arregloProductos.filter((producto) => producto.id !== aux);
      arregloProductos = arr;
      localStorage.setItem("produ", JSON.stringify(arregloProductos));
    }
  }
  crearFilaCarrito(arregloProductos);
}

function almacenarMemoria() {
  localStorage.setItem("produ", JSON.stringify(arregloProductos));
}

function limpiar() {
  while (contenedorCarrito.firstChild) {
    contenedorCarrito.removeChild(contenedorCarrito.firstChild);
  }
}
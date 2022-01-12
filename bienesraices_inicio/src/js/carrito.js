const listaProductos = document.querySelector(".productos");
const contenedorCarrito = document.querySelector("#lista-carrito tbody");
const carrito = document.querySelector("#carrito");
let arregloProductos = [];

principal();
function principal() {
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

  if (carrito) {
    carrito.addEventListener("click", EliminarProducto);
  }
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
    const valores = e.target.parentElement.parentElement.parentElement;

    datos(valores);
  }
}

function datos(valores) {
  const confirmar = confirm("Deseas Agregar al carrito?");
  if (!confirmar) {
    return;
  }
  const productoSeleccionado = {
    imagen: valores.querySelector(".imagePrincipal").src,
    titulo: valores.querySelector("h1").textContent,
    id: valores.querySelector("a").getAttribute("data-id"),
    cantidad: valores.querySelector("#cantidad").value,
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
      <td> ${element.quitar}</td>
      <td> <a href="#" class="borrar-curso" data-id="${element.id}"> X </a> </>
        `;
    if (contenedorCarrito) {
      contenedorCarrito.appendChild(fila);
    }
  });
}

function EliminarProducto(e) {
  e.stopPropagation();

  limpiar();

  let arre = [];
  if (e.target.classList.contains("borrar-curso")) {
    const aux = e.target.getAttribute("data-id");
    const nuevo = arregloProductos.map((produ) => {
      if (produ.id === aux && produ.cantidad > 1) {
        produ.cantidad--;
        arre = [...arre, produ];
        console.log("llegue primer if");
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
      console.log("llegue segundo if");
    } else {
      let arr = arregloProductos.filter((producto) => producto.id !== aux);
      arregloProductos = arr;
      localStorage.setItem("produ", JSON.stringify(arregloProductos));
      console.log("llegue tercero if");
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

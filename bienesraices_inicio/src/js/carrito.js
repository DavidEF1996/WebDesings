const listaProductos = document.querySelector(".productos");
const contenedorCarrito = document.querySelector("#lista-carrito tbody");
const contenedorVarios = document.querySelector("#lista-Varios");
const carrito = document.querySelector("#carrito");

const carritoVarios = document.querySelector("#lista-Varios");
const vaciarCarrito = document.querySelector("#vaciar-carrito");
const formularioAparte = document.querySelector(".formulario-producto-aparte");
let arregloProductos = [];
let arregloVarios = [];

principal();
function principal() {
  document.addEventListener("DOMContentLoaded", () => {
    console.log("me estoy iniciando");
    arregloProductos = JSON.parse(localStorage.getItem("produ")) || [];
    arregloVarios = JSON.parse(localStorage.getItem("varios")) || [];
    console.log(arregloProductos);
    if (contenedorCarrito) {
      limpiar();
      crearFilaCarrito();
      crearFilaVarios();
    }

    if (vaciarCarrito) {
      vaciarCarrito.addEventListener("click", vaciar);
    }

    if (formularioAparte) {
      formularioAparte.addEventListener("submit", agregarProductoVario);
    }
  });

  if (carrito) {
    carrito.addEventListener("click", EliminarProducto);
  }

  if (carritoVarios) {
    carritoVarios.addEventListener("click", EliminarProductoVario);
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
  Swal.fire({
    title: "Desea agregar este producto?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirmar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Agregado Correctamente!");
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
  });
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

      <td> <a href="#" class="borrar-curso boton-rojo" data-id="${element.id}"> X </a> </>
        `;
    if (contenedorCarrito) {
      contenedorCarrito.appendChild(fila);
    }
  });
}

function EliminarProducto(e) {
  e.stopPropagation();

  let arre = [];
  if (e.target.classList.contains("borrar-curso")) {
    Swal.fire({
      title: "Desea eliminar este producto?",
      text: "Si hay mas de dos, se disminuiran",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Confirmar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        limpiar();
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
      crearFilaVarios(arregloVarios);
    });
  }
}

function almacenarMemoria() {
  localStorage.setItem("produ", JSON.stringify(arregloProductos));
}

function limpiar() {
  while (contenedorCarrito.firstChild) {
    contenedorCarrito.removeChild(contenedorCarrito.firstChild);
  }

  while (contenedorVarios.firstChild) {
    contenedorVarios.removeChild(contenedorVarios.firstChild);
  }
}

function vaciar(e) {
  e.preventDefault();
  Swal.fire({
    title: "Desea vaciar el carrito de compras?",
    text: "Se eliminaran los productos que ha seleccionado",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirmar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Carrito Vaciado");
      arregloProductos = [];
      localStorage.setItem("produ", JSON.stringify(arregloProductos));
      limpiar();
      setTimeout(() => {}, 1000);
    }
  });
}

function agregarProductoVario(e) {
  e.preventDefault();
  Swal.fire({
    title: "Desea agregar este producto?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirmar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Agregado Correctamente!");
      setTimeout(() => {}, 500);
      let arregloProductos = JSON.parse(localStorage.getItem("produ")) || [];
      const textArea = document.querySelector("#textArea").value;
      const varios = {
        id: new Date().getMilliseconds(),
        descripcion: textArea,
      };

      arregloVarios.push(varios);

      localStorage.setItem("varios", JSON.stringify(arregloVarios));
      formularioAparte.reset();
    }
  });
}

function crearFilaVarios() {
  //limpiar();
  console.log(arregloVarios);
  arregloVarios.forEach((element) => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
        
      <td> ${element.descripcion}</td>
      


      <td> <a href="#" class="borrar-vario boton-rojo" data-id="${element.id}"> X </a> </>
        `;
    if (contenedorVarios) {
      contenedorVarios.appendChild(fila);
    }
  });
}

function EliminarProductoVario(e) {
  e.stopPropagation();

  let arre = [];
  if (e.target.classList.contains("borrar-vario")) {
    Swal.fire({
      title: "Desea eliminar este producto?",
      text: "Si hay mas de dos, se disminuiran",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Confirmar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        limpiar();
        const aux = e.target.getAttribute("data-id");
        console.log("lleg1");
        const nuevo = arregloVarios.map((produ) => {
          if (produ.id === Number(aux)) {
            console.log("llego2");
            let arr = arregloVarios.filter(
              (producto) => producto.id !== Number(aux)
            );
            console.log(arr);
            arregloVarios = arr;
            localStorage.setItem("varios", JSON.stringify(arregloVarios));
          }
        });
      }
      crearFilaCarrito(arregloProductos);
      crearFilaVarios(arregloVarios);
    });
  }
}

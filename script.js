const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

let esDeDia = true;

function alternarModo() {
  cuerpo.classList.toggle("oscuro");
  esDeDia = !esDeDia;
  if (esDeDia) {
    botonModo.textContent = "Modo noche";
  } else {
    botonModo.textContent = "Modo día";
  }
}

botonModo.addEventListener("click", alternarModo);

function alternarMenu() {
  menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);

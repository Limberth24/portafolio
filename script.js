const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

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

function alternarMenu() {
  menu.classList.toggle("abierto");
}

function revisarContacto(event){
  event.preventDefault();
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;
  const mensaje = document.querySelector("#msg").value;
  if (nombre === ""){
    avisoContacto.textContent = "Falta tu nombre.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else if (correo.includes("@") === false){
    avisoContacto.textContent = "Ese correo no parece correo: le falta el @.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else if (mensaje === ""){
    avisoContacto.textContent = "Falta tu mensaje.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else {
    avisoContacto.textContent = "Se recibio tu mensaje. Te contactamos hoy.";
    avisoContacto.classList.add("exito");
    avisoContacto.classList.remove("error");
  }
}

botonModo.addEventListener("click", alternarModo);
botonMenu.addEventListener("click", alternarMenu);
formularioContacto.addEventListener("submit", revisarContacto);


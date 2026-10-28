const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");
const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");
const formularioLogin = document.querySelector("#form-login");
const avisoLogin = document.querySelector("#aviso-login");

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
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;
  const mensaje = document.querySelector("#msg").value;
  if (nombre === ""){
    event.preventDefault();
    avisoContacto.textContent = "Falta tu nombre.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else if (correo.includes("@") === false){
    event.preventDefault();
    avisoContacto.textContent = "Ese correo no parece correo: le falta el @.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else if (mensaje === ""){
    event.preventDefault();
    avisoContacto.textContent = "Falta tu mensaje.";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else {
    avisoContacto.textContent = "Enviando...";
    avisoContacto.classList.add("exito");
    avisoContacto.classList.remove("error");
  }
}

function revisarLogin(event){
  const email = document.querySelector("#email").value;
  const password = document.querySelector("#password").value;
  if (email === ""){
    event.preventDefault();
    avisoLogin.textContent = "Falta tu correo.";
    avisoLogin.classList.add("error");
    avisoLogin.classList.remove("exito");
  } else if (email.includes("@") === false){
    event.preventDefault();
    avisoLogin.textContent = "Ese correo no parece correo: le falta el @.";
    avisoLogin.classList.add("error");
    avisoLogin.classList.remove("exito");
  } else if (password === ""){
    event.preventDefault();
    avisoLogin.textContent = "Falta tu contraseña.";
    avisoLogin.classList.add("error");
    avisoLogin.classList.remove("exito");
  } else {
    avisoLogin.textContent = "Entrando...";
    avisoLogin.classList.add("exito");
    avisoLogin.classList.remove("error");
  }
}

botonModo.addEventListener("click", alternarModo);
botonMenu.addEventListener("click", alternarMenu);

if (formularioContacto) {
  formularioContacto.addEventListener("submit", revisarContacto);
}

if (formularioLogin) {
  formularioLogin.addEventListener("submit", revisarLogin);
}


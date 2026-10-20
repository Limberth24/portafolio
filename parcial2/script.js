const formulario = document.querySelector("#form-turno");
const aviso = document.querySelector("#aviso-turno");

function validarTurno(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;
  const mascota = document.querySelector("#mascota").value;

  if (nombre === "" || correo === "") {
    event.preventDefault();
    aviso.textContent = "Nos falta tu nombre y tu correo para darte el turno.";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    event.preventDefault();
    aviso.textContent = "Revisa tu correo - le falta el arroba.";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else {
    aviso.textContent = "Turno reservado - te atiende Limberth Mamani Tola";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
  }
}

formulario.addEventListener("submit", validarTurno);
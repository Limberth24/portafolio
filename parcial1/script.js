const boton = document.querySelector("#btn-confirmar");

function confirmarPedido() {
  const mensaje = document.querySelector("#mensaje");
  mensaje.textContent = "Pedido confirmado - te atiende Limberth Mamani Tola";
  mensaje.classList.remove("oculto");
}

boton.addEventListener("click", confirmarPedido);
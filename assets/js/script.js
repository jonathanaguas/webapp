function validarFormulario() {
  const nombre = document.forms["form"]["nombre"].value;
  const correo = document.forms["form"]["correo"].value;

  if (nombre.length < 3) {
    alert("El nombre debe tener al menos 3 caracteres");
    return false;
  }

  const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regexCorreo.test(correo)) {
    alert("Correo inválido");
    return false;
  }

  return true;
}
<script>
document.addEventListener('DOMContentLoaded', function () {
for (let i = 1; i <= 35; i++) {
  const at = document.getElementById(`at${i}`);
  const tat = document.getElementById(`tat${i}`);
  at.addEventListener('change', function () {
    if (this.checked) {
      tat.disabled = false;
      tat.focus();
    } else {
      tat.value = '';
      tat.disabled = true;
    }
  });
}


    const formulario = document.getElementById('miFormulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        // Aquí puedes añadir la lógica para guardar y enviar el formulario
        alert('Formulario enviado');
    });
});

function validateEmail() {
  var emailField = document.getElementById('email');
  var email = emailField.value;
  var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Patrón simple de validación de email

  if (pattern.test(email)) {
    // El email es válido
    return true;
  } else {
    // El email no es válido
    alert('Por favor ingrese una dirección de email válida.');
    emailField.focus();
    return false;
  }
}

</script>
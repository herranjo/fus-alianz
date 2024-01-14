<script>
document.addEventListener('DOMContentLoaded', function () {
    const at1 = document.getElementById('at1');
    const tat1 = document.getElementById('tat1');

    at1.addEventListener('change', function () {
    if (this.checked) {
        tat1.disabled = false;
        tat1.focus();
    } else {
        tat1.value = '';
        tat1.disabled = true;
    }
    });

    const formulario = document.getElementById('miFormulario');
    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        // Aquí puedes añadir la lógica para guardar y enviar el formulario
        alert('Formulario enviado');
    });
});

</script>
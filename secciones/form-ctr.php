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

    const at2 = document.getElementById('at2');
    const tat2 = document.getElementById('tat2');
    at2.addEventListener('change', function () {
    if (this.checked) {
        tat2.disabled = false;
        tat2.focus();
    } else {
        tat2.value = '';
        tat2.disabled = true;
    }
    });

    const at3 = document.getElementById('at3');
    const tat3 = document.getElementById('tat3');
    at3.addEventListener('change', function () {
    if (this.checked) {
        tat3.disabled = false;
        tat3.focus();
    } else {
        tat3.value = '';
        tat3.disabled = true;
    }
    });

    const at4 = document.getElementById('at4');
    const tat4 = document.getElementById('tat4');
    at4.addEventListener('change', function () {
    if (this.checked) {
        tat4.disabled = false;
        tat4.focus();
    } else {
        tat4.value = '';
        tat4.disabled = true;
    }
    });

    const at5 = document.getElementById('at5');
    const tat5 = document.getElementById('tat5');
    at5.addEventListener('change', function () {
    if (this.checked) {
        tat5.disabled = false;
        tat5.focus();
    } else {
        tat5.value = '';
        tat5.disabled = true;
    }
    });

    const at6 = document.getElementById('at6');
    const tat6 = document.getElementById('tat6');
    at6.addEventListener('change', function () {
    if (this.checked) {
        tat6.disabled = false;
        tat6.focus();
    } else {
        tat6.value = '';
        tat6.disabled = true;
    }
    });

    const at7 = document.getElementById('at7');
    const tat7 = document.getElementById('tat7');
    at7.addEventListener('change', function () {
    if (this.checked) {
        tat7.disabled = false;
        tat7.focus();
    } else {
        tat7.value = '';
        tat7.disabled = true;
    }
    });

    const at8 = document.getElementById('at8');
    const tat8 = document.getElementById('tat8');
    at8.addEventListener('change', function () {
    if (this.checked) {
        tat8.disabled = false;
        tat8.focus();
    } else {
        tat8.value = '';
        tat8.disabled = true;
    }
    });

    const at9 = document.getElementById('at9');
    const tat9 = document.getElementById('tat9');
    at9.addEventListener('change', function () {
    if (this.checked) {
        tat9.disabled = false;
        tat9.focus();
    } else {
        tat9.value = '';
        tat9.disabled = true;
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
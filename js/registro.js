document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const contrasena = document.getElementById('txtpassword').value.trim();
        const confirmarContrasena = document.getElementById('confirmar_contrasena').value.trim();
        if (contrasena !== confirmarContrasena) {
            alert('Las contraseñas no coinciden. Por favor, verica y vuelve a intentarlo.');
            return;
        }
        form.submit();
    });
    function validateEmail(email) {
        const regex = /\S+@\S+\.\S+/;
        return regex.test(email);
    }
});
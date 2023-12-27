document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const usuario = document.getElementById('txtusuario').value.trim();
        const contrasena = document.getElementById('txtpassword').value.trim();
        if (usuario === '' || contrasena === '') {
            alert('Por favor, ingresa tu usuario y contraseña.');
            return;
        }
        form.submit();
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('txtpassword');
    const toggleButton = document.querySelector('.password-toggle-button');
    const eyeClosed = document.querySelector('.eye-closed');
    const eyeOpen = document.querySelector('.eye-open');
    toggleButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeClosed.style.display = 'none';
            eyeOpen.style.display = 'inline-block';
        } else {
            passwordInput.type = 'password';
            eyeClosed.style.display = 'inline-block';
            eyeOpen.style.display = 'none';
        }
    });
});
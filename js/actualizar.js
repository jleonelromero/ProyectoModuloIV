function cargarDistritos(provinciaId) {
    var distritoDropdown = document.getElementById('distrito');
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            distritoDropdown.innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', 'get_distritos.php?idProvincia=' + provinciaId, true);
    xhr.send();
}
window.addEventListener('DOMContentLoaded', function () {
    var provinciaSeleccionada = document.getElementById('provincia').value;
    cargarDistritos(provinciaSeleccionada);
});
document.getElementById('provincia').addEventListener('change', function () {
    var provinciaId = this.value;
    cargarDistritos(provinciaId);
});
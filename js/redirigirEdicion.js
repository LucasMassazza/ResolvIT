
function redirigirEditar(id, nombre, apellido, mail, usuario) {
    var url = "edicionPerfil.php?id=" + encodeURIComponent(id) +
                "&nombre=" + encodeURIComponent(nombre) +
                "&apellido=" + encodeURIComponent(apellido) +
                "&mail=" + encodeURIComponent(mail) +
                "&usuario=" + encodeURIComponent(usuario);
    window.location.href = url;
}

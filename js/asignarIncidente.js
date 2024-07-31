function asignarIncidente(id) {
    var url = "procesoAsignacion.php?id=" + encodeURIComponent(id);
    window.location.href = url;
}
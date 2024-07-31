function finalizacionIncidente(idIncidente,idAsignacion) {
    var url = "procesoFinalizacion.php?idIncidente=" + encodeURIComponent(idIncidente)+
    "&idAsignacion=" + encodeURIComponent(idAsignacion);
    window.location.href = url;
}
function confirmarEliminacion(id) {
    if (confirm("¿Seguro que desea cancelar el Incidente?")) {
        window.location.href = "eliminarIncidente.php?id=" + id;
    }
}

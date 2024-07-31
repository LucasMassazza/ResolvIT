
function confirmarEliminacion(id) {
    if (confirm("¿Seguro que desea elimnar el usuario?")) {
        window.location.href = "procesoEliminarUsuario.php?id=" + id;
    }
}
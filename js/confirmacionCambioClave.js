function validarFormulario() {
    var clave = document.getElementById("clave").value;
    var regex = /^[a-zA-Z0-9!@# ]{5,}$/;

    if (clave.length < 5) {
        alert("La clave debe tener al menos 5 caracteres.");
        return false;
    }else if(!regex.test(clave)) {
        alert("La clave solo puede contener letras, números, espacios, y los símbolos !, @, #.");
        return false;
    }else{
        if (confirm("¿Seguro que desea cambiar la clave?")) {
            window.location.href = "procesoCambioClave.php";
        }
    } 
}

function validarClave() {
    var clave = document.getElementById("clave").value;
    var regex = /^[a-zA-Z0-9!@# ]{5,}$/;
    var botonSubmit = document.getElementById("submit");

    if (clave.length >= 5 && regex.test(clave)) {
        botonSubmit.disabled = false;
        botonSubmit.classList.remove("buttonIncidenteDisable");
    } else {
        botonSubmit.disabled = true;
        botonSubmit.classList.add("buttonIncidenteDisable");
    }
}



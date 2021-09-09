function validarCuadros(){
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;

    if(usuario == ""){
        alert("El usuario no puede quedar vacío")
    }

    if(clave == ""){
        alert("La clave no puede quedar vacía")
    }

    if(mail.indexOf("@") == -1){
        alert("Falta el arroba")
    }

}

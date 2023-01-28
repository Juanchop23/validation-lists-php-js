function validar() {

    let nombre, correo, web, comentario;

    nombres = document.getElementById('nombres').value;
    apellidos = document.getElementById('apellidos').value;
    edad = document.getElementById('edad').value;
    direccion = document.getElementById('direccion').value;
    comuna = document.getElementById('comuna').value;
    correo = document.getElementById('correo').value;
    carrera = document.getElementById('carrera').value;

    if (nombres == "" || apellidos == "" || edad == "" || direccion == "" || comuna == "" || correo == "" || carrera == "") {

        alert("Te faltan algunos campos por completar");
        return false;
    }
}

function mostrar(){

    var btn = document.getElementById("Ojo");
    var contra1 = document.getElementById("Contraseña1");
    var contra2 = document.getElementById("Contraseña2");

    if(contra1.type == "password" && contra2.type == "password"){
        contra1.type = "text";
        contra2.type = "text";

        btn.src = "Imagenes/Visible.png";
    }else{
        contra1.type = "password";
        contra2.type = "password";

        btn.src = "Imagenes/Invisible.png";
    }

}
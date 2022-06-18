
    function mostrarCon(){
        //Obtenemos los elementos del campo contraseña
        var boton = document.getElementById("BotonOjoIn"); 
        var contraseña = document.getElementById("ContraIn");

        if(contraseña.type == "password"){ //Si el campo es de tipo contraseña se cambia el tipo e imagen
            contraseña.type= "text";
            boton.src = "Imagenes/Visible.png";

            setTimeout("ocultar()", 2000); //Agregamos una duracion de este cambio, en este caso 2s
        }else{
            contraseña.type = "password";
            boton.src = "Imagenes/Invisible.png";
        }

    }

    function ocultar(){
        //obtiene los elementos del campo
        var boton = document.getElementById("BotonOjoIn");
        var contraseña = document.getElementById("ContraIn");
        //Vuelve a tipo contraseña el campo y coloca la imagen principal
        contraseña.type = "password";
        boton.src = "Imagenes/Invisible.png";
    }
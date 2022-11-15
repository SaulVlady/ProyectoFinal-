function validar(){
    var nombre, apellidos, correo,usuario, clave, telefono;
    var ercorreo,ernombre,erapellidos, erusuario,erclave,ertelefono;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo =  document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;
    comentarios = document.getElementById("comentarios").value;

    ernombre = /^[A-Z][a-z]+/;
    erapellidos = /^[A-Z][a-z]+/;
    ercorreo = /\w+@[a-zA-Z]+\.[a-z]{2,3}/;
    erusuario = /\w{5,20}/;
    erclave = /[A-Za-z0-9()#"!/@+~*.%&-]{5,10}/;




    if(nombre=="" || apellidos=="" || correo=="" || usuario=="" || clave=="" || telefono=="" || comentarios=="")
    {
        alert("Todos los campos son obligartorios");
        return false;
    } 
    else if(nombre.length>100)
    {
        alert("El nombre que ingresaste esta largo");
        return false;
    }
    else if (apellidos.length>100)
    {
        alert("El apellido que ingresaste esta largo")
        return false;
    }
    else if (correo.length>30)
    {
        alert("El correo que ingresaste esta largo")
        return false;
    }
    else if (usuario.length>20)
    {
        alert("El usuario que ingresaste esta largo ")
        return false;
    }
    else if (clave.length>10)
    {
        alert ("La clave que ingresaste esta largo")
        return false;
    }
    else if (telefono.length>11)
    {
        alert ("El telefono que ingresaste esta largo")
        return false;
    }
    else if (comentarios.length>100)
    {
        alert ("Tu comentario que ingresaste esta largo")
        return false;
    }
    else if (isNaN(telefono))
    {
        alert("El telefono solo admite números")
    }


    if(!ernombre.test(nombre))
    {
        alert("El formato del nombre es incorrecto");
        return false;
    }
    
    if(!erapellidos.test(apellidos))
    {
        alert("El formato del apellidos es incorrecto");
        return false;
    }
    
    if(!ercorreo.test(correo))
    {
        alert("El formato del correo es incorrecto");
        return false;
    }
    
    if(!erusuario.test(usuario))
    {
        alert("El formato del usuario es incorrecto");
        return false;
    }
    
    if(!erclave.test(clave))
    {
        alert("El formato de la clave es incorrecto");
        return false;
    }
    



    /*
    if(nombre===""){    
        alert("Favor de ingresar su nombre");
        return false;
    }
    if(apellidos===""){
        alert("Favor de ingresar sus apellidos");
        return false;
    }
    if(correo===""){
        alert("El correo es obligatorio");
        return false;
    }
    if(usuario===""){
        alert("El usuario es obligatorio");
        return false;
    }
    if(clave===""){
        alert("La clave es obligatoria");
        return false;
    }
    if(telefono===""){
        alert("Favor de ingresar su número");
        return false;
    } */

} 
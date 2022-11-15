<?php
//Crear una variable con los siguientes parametros
//Servidor, usuario, contraseña, nombre_basedeDatos

$conexion = mysqli_connect("localhost" , "root", "", "registro_contacto");

/*
if(!$conexion){
    echo "Error en la conexion a la base de datos";
}
else{
    echo "Conexion exitosa a la base de datos";
}*/

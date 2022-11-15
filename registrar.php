<?php
include 'cn.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];

//consulta para insertar datos desde el formulario hacia la base de datos
$insertar = "INSERT INTO usuario(nombre, apellidos, correo, usuario, clave, telefono, comentario)
VALUES ('$nombre','$apellidos','$correo','$usuario','$clave','$telefono','$comentario')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
    //echo 'El usuario ya existe';
    echo '<script languaje="javascript">
    alert("El usuario que ingresaste ya existe");
    window.history.go(-1);
    </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script languaje="javascript">
    alert("El correo que ingresaste ya existe");
    window.history.go(-1);
    </script>';
    exit;
}

if(isset($_POST['boton'])){
    if(empty($apellidos)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El apellido no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(empty($correo)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El correo no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(empty($usuario)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El usuario no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(empty($clave)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("La clave no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(empty($telefono)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El telefono no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($nombre)>10){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El nombre que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($apellidos)>20){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El apellido que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($correo)>40){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El correo que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($usuario)>10){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El usuario que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($clave)>10){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("La clave que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(strlen($telefono)>10){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El telefono que ingresaste esta demasiado largo");
       window.history.go(-1);
     </script>';
    exit;
    }
}

if(isset($_POST['boton'])){
    if(empty($nombre)){
       // echo"<p class='Error'>Agrega tu nombre</p>";
       echo '<script languaje="javascript">
       alert("El nomnbre no se registro");
       window.history.go(-1);
     </script>';
    exit;
    }
}


//Ejecutar consulta
$registro = mysqli_query($conexion, $insertar);
if($registro){
    //echo 'Usuario registrado';
    echo '<script languaje="javascript">
    alert("El Registro completado");
    window.history.go(-1);
    </script>';  
}
else if(!$registro){
    echo 'Error al registrar el usuario';
}
//Cerrar conexion a la base de datos
mysqli_close($conexion);
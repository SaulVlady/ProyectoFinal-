<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
    <link rel="stylesheet" href="esti.css">
</head>
<body>
<header class="header">
        <a href="index.html">
            <img class="header__logo" src="img/logo.png" alt="Logotipo">
        </a>
    </header>
   
    <form method="post">
        <h1>"CORREO"</h1>
        <input type="text" placeholder="Nombre"  name="nombre" required="">
        <input type="email" placeholder="Email" name="email" required="">
        <input type="text" placeholder="Asunto" name="asunto" required="">
        <input placeholder="Mensaje" name="msg"  required="">
        <input type="submit" name="enviar">
        <h3 class="form_tit"> Regresar a 
                <a class="link" href="inicioindex.html">MENU PRINCIPAL </a> 
            </h3>
    </form>
    
    <?php
    include("correo.php");
    ?>
</body>
</html>
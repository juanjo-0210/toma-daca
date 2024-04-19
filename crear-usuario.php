<?php
include 'header.php';



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signin.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id=""/>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id=""/>

        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id=""/>

        <label for="email">Correo Electronico:</label>
        <input type="email" name="email" id=""/>

        <label for="edad">Telefono:</label>
        <input type="text" name="telefono" id="">

        <label for="postal">Contrasena:</label>
        <input type="password" name="pass" id="" >
        
        <button type="submit">Registrase</button>

    </form>
</body>
</html>
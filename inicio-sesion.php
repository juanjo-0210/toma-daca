<?php


$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if($usuario == 'Juanjo' && $pass == 'Juanjose'){
    session_start();
    $_SESSION['nombre'] = 'juan jose';

    header('location: index.php');
}


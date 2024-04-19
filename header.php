<?php

//session_start();

//objeto de conexion utilizado en (producto)
require_once('conec.php') ;
$conec = new conection;
$conec->mysqli();
              
//incluir documento que contiene formulario de inicio de sesion
include 'loginForm.php';
$loginForm = new loginForm;

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> --> <!--<![endif]-->
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Trueque</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/formSubidaProducto.js"></script>
    </head>
    <body>
        <header>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <figure>
                <img src="img/TOMADACA.jpg" alt="TOMA & DACA" width="200px"/> 
              </figure>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a href="indexx.php" class="nav-link " aria-current="page">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">Favorito</a>
                  </li>
                </ul>
              </div>
            
            
              <!-- <div class="administrador"> -->
              <div class='dropstart'>
                <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="icons8-usuario-32.png" alt="">
                </a>
                <ul class=" me-auto mb-2 mb-lg-0 dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <?php
                            
                            if (isset($_SESSION['NAME'])) { //fallo, esta validacion o condicional no funciona, arreglar (arreglado sacando la funcion session_start fuera de la consicional )    
                              print "<li class='nav-item nav-link dropdown-item'> {$_SESSION['NAME']} {$_SESSION['LASTNAME']} </li>";
                              
                              echo '<li class="nav-item dropdown-item"><a href="productoForm.php" class="nav-link">Subir Producto</a></li>';
                              echo '<li class="nav-item dropdown-item"><a href="misProductos.php" class="nav-link">Mis productos</a></li>';
                              echo '<li class="nav-item dropdown-item"><a href="logout.php" class="nav-link">Salir</a></li>';
                            }else{
                              echo '<li class="nav-item dropdown-item"><a data-bs-toggle="modal" data-bs-target="#login" href="" class="nav-link">Acceder</a></li>';
                              echo '<li class="nav-item dropdown-item"><a href="crear-usuario.php" data-bs-toggle="modal" data-bs-target="#signin" class="nav-link">Registrarse</a></li>';
                            }
                            
                            //echo $poo->getProductSQL();
                            //print_r($poo2->setProduct());
                            
                          ?> 

                        
                </ul>     
              </div>    
             <!-- </div>-->
            </nav>
        </header>
        <?php 
            $loginForm->formLogin(); 
            $loginForm->formSignIn();
        ?>
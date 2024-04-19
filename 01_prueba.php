<?php

include_once('conec.php');
$conexion = new conection ;
$conexion->mysqli();

echo 'hola <br>';
$dato = 'mysql -u root -p < mysql.sql';
$fila = exec($dato,$array,$entero);
print_r($array);
echo '<br>';
print_r($entero . '<br>');

echo $fila;

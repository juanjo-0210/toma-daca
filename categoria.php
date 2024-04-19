<?php

include_once('conec.php');


class categoria {

    function __construct(){
        $this->mysqli = new conection();
    }

    function getCategoria (){
        $sql = 'SELECT * FROM categorias';
        $consulta = $this->mysqli->mysqli()->query($sql);
        while ($resultado = $consulta->fetch_assoc()) {
           echo "<p>" . $resultado['nombre_categoria'] . "</p>";
        }
    }


}
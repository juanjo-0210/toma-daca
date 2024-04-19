<?php
//session_start();
include_once('conec.php');

class Productos{
    public $nombre;
    public $rutaImagen;
    public $descripcion;
    public $userID;

    function __construct (){
        $this->mysql = new conection;
        $this->nombre = $_POST["nombre_producto"];
        $this->rutaImagen = $_FILES["imagen"];
        $this->descripcion = $_POST["desc_producto"];
        $this->userID = $_SESSION["ID"];
    }

    function setProducto (){
        $sql = 'SELECT MAX(idnombreImagen) FROM nombreimagen';
        $consulta1 = $this->mysql->mysqli()->query($sql);  
        $resultado1 = $consulta1->fetch_assoc();
        $cont = $resultado1['MAX(idnombreImagen)']++;
        $sql = "INSERT INTO nombreimagen (nombreImagencol) VALUES ('')";
        $this->mysql->mysqli()->query($sql);

        $doc = $this->rutaImagen["type"];
        $formato = explode('/',$doc);
        $this->rutaImagen['name'] = $cont . '.' . $formato[1];
        $inst = 'subidos/' . $this->rutaImagen["name"];

        $setNombreProducto = "INSERT INTO productos (nombre_producto, ruta_imagen, desc_producto, usuarioPropietario)  VALUES ('$this->nombre', '$inst', '$this->descripcion', '$this->userID')";
        $consulta = $this->mysql->mysqli()->query($setNombreProducto);
      
        move_uploaded_file($this->rutaImagen["tmp_name"], "subidos/" . $this->rutaImagen['name']);
        
       /*  $sql = "INSERT INTO productos (nombre_producto, img_producto, desc_producto, usuarioPropietario) VALUES ('$this->nombre', '$this->rutaImagen', '$this->descripcion', '$this->userID')" ; 
        if($this->mysql->mysqli()->query($sql) === TRUE){
            header('location: indexx.php');
        } */

    }

    
    function getProducto_nombre () {
        $sqlNombre = "SELECT nombre_producto FROM productos WHERE usuarioPropietario='$this->userID'";
        $producto_nombre = $this->mysql->mysqli()->query($sqlNombre);
        //$simple = $producto_nombre->fetch_assoc();
        return $simple;
        /* while($resultado = $consulta->fetch_assoc()){
            echo '<br>' . $resultado['nombre_producto'];
        } */
       
    }

    function getProducto_imagen () {
        $sqlImagen = "SELECT * FROM productos WHERE usuarioPropietario='$this->userID'";
        $consulta = $this->mysql->mysqli()->query($sqlImagen);
        /* while($resultado = $consulta->fetch_assoc()){
            echo '<br>' . $resultado['nombre_producto'];
        } */
       
    }

    function getProducto_desc () {
        $sqlDesc = "SELECT * FROM productos WHERE usuarioPropietario='$this->userID'";
        $consulta = $this->mysql->mysqli()->query($sqlDesc);
        /* while($resultado = $consulta->fetch_assoc()){
            echo '<br>' . $resultado['nombre_producto'];
        } */
       
    }

    


}


$producto = new Productos();
$producto->setProducto();   

<?php

include 'conec.php';
$mysqli = new conection;

include 'header.php';

include_once('producto.php');
$misProductos = new productos;

/* 
$userID = $_SESSION["ID"];

function getProducto ($mysqli,$userID) {
    
    $sql = "SELECT * FROM productos WHERE usuarioPropietario='$userID'";
    $consulta = $mysqli->mysqli()->query($sql);
    while($resultado = $consulta->fetch_assoc()){
        echo '<br>' . $resultado['nombre_producto'];
    }
   
}

getProducto($mysqli,$userID); */
$datos = $misProductos->getProducto_nombre();
print_r($datos);
/* while($resultado = $datos->fetch_assoc()){

    echo "    <article class='col-4' style='width: 30rem'>
            <div class='card'>  
        
            <div id='carouselExampleControls' class='carousel slide'  data-bs-interval='false'>
            <div class='carousel-inner'>
            <div class='carousel-item active'>
                <img src='https://placehold.co/600x350' class='d-block w-100' alt='...'>
            </div>
            <div class='carousel-item'>
                <img src='https://placehold.co/600x350' class='d-block w-100' alt='...'>
            </div>
            <div class='carousel-item'>
                <img src='https://placehold.co/600x350' class='d-block w-100' alt='...'>
            </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
            </div>
                            
            <div class='card-body'>
                <h5 class='card-title'>" . $resultado['nombre_producto'] . "</h5>
                <p class='card-text text-truncate'>Este es un producto de ejemplo Este es un producto de ejemplo Este es un producto de ejemplo</p>
                <a href='#' class='btn btn-primary'>Me Interesa</a>
            </div>
            </div> 

            </article>";
} */

?>
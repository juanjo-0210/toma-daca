<?php
include 'header.php';





?>




    <form action="producto.php" method="post" enctype="multipart/form-data">
        <label for="">Nombre del producto:</label>
        <input type="text" name="nombre_producto" >

        <label for="">Imagen del producto:</label>
        <input type="file" name="imagen" id="fichero1"/>

        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span class="file"></span>
        <span onclick="fichero ()" id="add">Anadir archivo</span>

        <label for="">Descripcion del producto:</label>
        <input type="text" name="desc_producto" >
        
        <input type="submit" value="Enviar">

    </form>

</body>
</html>
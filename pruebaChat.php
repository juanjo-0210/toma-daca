<?php
require 'conec.php';
$mysql = new conection;

    function setChat ($texto) {
        $mysql = new conection;
        $sqlSet = "INSERT INTO mensaje (cuerpo_mensaje,fecha) VALUES ('$texto',CURRENT_TIMESTAMP())";
        $mysql->mysqli()->query($sqlSet);
    }

    if(isset($_POST['texto'])){
        setChat($_POST['texto']);
    }

    function getChat () {
        $mysql = new conection;
        $sqlGet = "SELECT * FROM mensaje";
        $consulta = $mysql->mysqli()->query($sqlGet);
        //$servertime = $mysql->mysqli()->query("SELECT CURRENT_TIMESTAMP()");
        while ($resultado = $consulta->fetch_assoc()){
            
            //$cont = $resultado['fecha'] - $servertime;
            echo $resultado['cuerpo_mensaje'] . '<br>' ;
        }
    }
?>
   <div>
        <?php getChat() ?>
   </div>
        <form action="pruebaChat.php" method="post"><br>
        <input type="text" name="texto" required placeholder="Mensaje" autofocus/><br>
        <input type="submit" value="Enviar">
        </form>



   








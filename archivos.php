<?php
$tam =     ["size"];
if($tam > 256 * 1024){
    echo "<br>El documento es demasiado grande ";
    return;
}



$doc = $_FILES["fichero"]["type"];
$formato = explode('/',$doc);


$_FILES["fichero"]["name"] = '12345678.' . $formato[1];
echo "Nombre del fichero es: " . $_FILES["fichero"]["name"];
echo "<br>Nombre temporal del fichero" . $_FILES["fichero"]["tmp_name"];
$res = move_uploaded_file($_FILES["fichero"]["tmp_name"], "subidos/" . $_FILES["fichero"]["name"]);
if($res){
    echo "<br>Fichero guardado";
}else{
    echo "<br>Error";
}

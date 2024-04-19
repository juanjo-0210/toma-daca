<?php
 
include 'conec.php';


Class Registrarse{

    public $usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $phone;
    public $pass;


    function __construct () {
        $this->mysql = new conection;
        $this->usuario = $_POST['usuario'];
        $this->nombre = $_POST['nombre'];
        $this->apellido = $_POST['apellido'];
        $this->email = $_POST['email'];
        $this->phone = $_POST['telefono'];
        $this->pass = $_POST['pass'];
    }

    function signIn(){
        $sql = "INSERT INTO usuarios (nombres, apellidos, correoElectronico, numeroTelefonico, nombreUsuario, contraseña) VALUES ('$this->nombre', '$this->apellido', '$this->email', '$this->phone', '$this->usuario', 'md5($this->pass)')";
        if ($this->mysql->mysqli()->query($sql) == TRUE) {
            header('location: indexx.php');
            echo 'registrado correctamente';
        }else{
            echo 'no se ha podido registrar ' . $this->nombre;
        }
    }


}

$R = new Registrarse;
$R->signIn();
<?php
include 'conec.php';
//include 'indexx.php';


class Acceder {

    public $user;
    public $pass;
    

    function __construct(){
        $this->mysql = new conection();
        //$this->user = $user;
        //$this->pass = $pass;
    }


    public function login () {
        $sesion = 0;
        $sql = "SELECT * FROM trueque.usuarios";
        $datos = $this->mysql->mysqli()->query($sql);
        
        

        //NOTA IMPORTANTE, LA MEJOR OPCION PARA LEER UN ARRAY DE UNA INSTRUCCION SQL ES UN WHILE PORQUE EN CADA RECORRIDO ASIGNA LA SIGUIENTE LINEA A LA VARIABLE DENTRO DE LA SECUENCIA DE DISPARO Y TAMBIEN PARA LA SENTENCIA CUANDO NO HAY MAS FILAS 
        
        while ($usuario = $datos->fetch_assoc()) {
            if ( $_POST['usuario'] == $usuario['nombreUsuario'] && $_POST['pass'] == $usuario['contraseña'] ){
                $GLOBALS['socio'] = $usuario;
                echo $usuario['nombres'] . ' ' . $usuario['apellidos'];
                $sesion = 1;
                //return $sesion;
                header('location: indexx.php');
                break;
            }
        
        if($sesion==0){
            header('location: loginForm.php');
            echo 'no se ha podido iniciar sesion <br>';
        }
            
           
        }
        return $sesion;
    }
}
//$GLOBALS['socio']
       
  
class session extends Acceder{


    function setSession (){ //pasar la variable this->socio con el valor dentro de
        session_start();
        $this->user = $GLOBALS['socio'];
        $_SESSION['ID'] = $this->user['idusuarios'];
        $_SESSION['USERNAME'] = $this->user['nombreUsuario'];
        $_SESSION['NAME'] = $this->user['nombres'];
        $_SESSION['LASTNAME'] = $this->user['apellidos'];
        $_SESSION['EMAIL'] = $this->user['correoElectronico'];
        $_SESSION['PHONE'] = $this->user['numeroTelefonico'];
        
    }

}

$p = new Acceder();
$p->login();
$clase2 = new session();
if($p->login()==0){
    echo 'no se ha podido inicar session';
}else{
$clase2->setSession();
}






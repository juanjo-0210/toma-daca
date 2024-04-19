<?php
//phpinfo();
session_start();
class conection {
    public $host = '127.0.0.1';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_name = 'trueque';

    public function mysqli (){
        $mysqli = new mysqli($this->host,$this->db_user,$this->db_pass,$this->db_name);
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
        }else{
            echo mysqli_info($mysqli);
            return $mysqli;
        } 
    }

}


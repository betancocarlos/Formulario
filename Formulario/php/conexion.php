<?php
//validamos datos del servidor
$servername="localhost";
$username="root";
$password="";
$database="formulario";

//conetamos al base datos
$conexion = new mysqli($servername, $username, $password, $database);


//verificamos la conexion a base datos
if($conexion->connect_error){
    die("Connection failed:" . $conexion->connect_error);
}else {
    echo "";
} 
        
?>
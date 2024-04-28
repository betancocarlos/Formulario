 
<?php
if (!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["contraseña"]) or empty($_POST["co_contraseña"])){
      echo '<div class="alert"><font style="color:red; font-size:20px; text-align:center;">Uno de los campos esta vacio</font></div>';
    } else {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["correo"];
    $contraseña=$_POST["contraseña"];
    $contraseña=md5($contraseña);
    $co_contraseña=$_POST["co_contraseña"];
    $co_contraseña=md5($co_contraseña);
    $sql=$conexion->query("insert into registro(nombre,apellido,correo,contraseña,co_contraseña)values('$nombre','$apellido',' $correo',' $contraseña','$co_contraseña')");    
  if($sql==1){
      echo"<script> alert('Usuario registrado correctamente');</script>";
      }else{
      echo"<script> alert('Error al registrar');</script>";
      }
    }  
}
?>


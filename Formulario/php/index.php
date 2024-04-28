<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/Formulario/css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <br>
    <div align="center"><font style="color:white;  font-size:50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Registro</font></div>
  
    <div class="container">
    <form  class="form-login" method="POST">

        <h2 class="form-login-heading">Registrate</h2>
        <?php
        include("/laragon/www/Formulario/php/conexion.php");
        include("/laragon/www/Formulario/controlador/controlador.php");
        ?>
        <br>
        <div class="login-wrap" style="text-align:center;"> 
            <span id="spanlogin" > 
          <input type="text" class="form-control" type="text" name="nombre" placeholder="Tu Nombre" autofocus required>
          <br>
          <br>
          <input  class="form-control" name="apellido" placeholder="apellido"  required>
          <br>
          <br>
          <input  class="form-control"  name="correo" placeholder="Correo" required>
          <br>
          <br>
          <div class="container1">
          <input  class="form-control"  type="password" name="contraseña" placeholder="Contraseña" id="Input"  required>
          <img class="con1" id="eye" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAedJREFUWEftl+FNw0AMRq+TAJvAJMAkwCTQSYBJgEkgD8WV69g+J5GaInFS1R+NL8/fd7avu3Zma3dmPO3PAF231t62UM9T6Lm1dtdaexqAHk8NZYEAAUjWyaE8hVDlYSuo6FBXoThrlyM833LuPgfb+cxeWZV5UC+jehokeilw7wMwMWW4XtlbqNkZjwHA3VfAekDs14NCAdbXUBAXo4XYJ1bqJCiSVLEKkAfFpmyeWYGtt8O5svamUBkQLUCy96CqLQEgqpZvWWFCvSrD9woU8FJZkWqlyvWAyORVZXNjxkjlTEV22libsDtcvxUM1QGQXT2ozE4di5rsf1DVKmRfdJUc3B5UFvuhqvAI3gKFDwYNKIOa2KH20HFHLmRA2YaaL4KaYxtq/q7Msom/SZv2oLKWUraMd861TThLZT1eb2gTLJI+qOMptKYBVmIttG0p4Z26mq3nYhRb2jPzmeao2315Yg+U9uVYo4dt1N+6/zrkfq2VYJTs1aiIznpUfcRTwe6qTHs2Zmp71wkyJXuuHnJIs9kXKhOVfQTuTezo2epAXqyQDgRM7jmeYvLsYqiKZZES+lYIpAzI6BqyusqSxrz4py7UGoWWUqXNcQsg3dFLF7Slmc+N4wxOrrtbKRTC/wP1fP0BHZePJafx/lMAAAAASUVORK5CYII="/>
        </div>
          
          <p class="texto">La contraseña debe tener almenos 8 caracteres.</p>
          <div class="container2">
          <input  class="form-control" type="password" name="co_contraseña" placeholder="Confirmar Contraseña" id="Inputs" required>
        </div>
          <br>
          <br>
          <div  class="caja"  style="text-align:center;">
            <br>
          <input class="button" name="registro"  value="Registrar" type="submit">
        </span>
        </div>
         
    </div>
  </form>
</div>
  </div>
 <script src="http://localhost/Formulario/js/code.js"></script>
 <script src="http://localhost/Formulario/js/codee.js"></script>
</body>

</html>

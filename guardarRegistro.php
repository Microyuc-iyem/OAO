<?php
  require "conexion.php";

  $nombres = $_POST['nombres'];
  $apellidoPaterno = $_POST['apellidoPaterno'];
  $apellidoMaterno = $_POST['apellidoMaterno'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $insertar = "INSERT INTO usuarios (nombres,apellidoPaterno,apellidoMaterno,telefono,correo,contrasena) VALUES ('$nombres','$apellidoPaterno','$apellidoMaterno','$telefono','$correo','$contrasena')";

  $verficar_link = mysqli_query($conectar , "SELECT * FROM usuarios WHERE correo = '$correo' ");
  if( mysqli_num_rows($verficar_link) > 0 ){
   echo '
   <script>
     alert("ESTE USUARIO YA ESTA REGISTRADO");
     location.href="registro.php";
   </script>
 ';
 exit;
  }

  $query = mysqli_query($conectar, $insertar);

  if($query){
    echo '
      <script>
        alert("SE GUARDARON LOS DATOS CORRECTAMENTE");
        location.href="index.php";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert("ERROR: NO SE GUARDARON LOS DATOS");
        location.href="registro.php";
      </script>
    ';
  }

?>
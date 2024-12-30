<?php
  require "conexion.php";

  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $comparar = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena' ";

  $resultado = mysqli_query($conectar , $comparar);

    if($correo == "admin" && $contrasena =="admin" && (mysqli_num_rows($resultado) > 0 )){
    session_start();
    $_SESSION['username'] = $correo;
	  $_SESSION["autentificado"] = "SI";
	  header("Location: inicioAdmin.php");
 }
 else{
    if((mysqli_num_rows($resultado) > 0 )){
      session_start();
      $_SESSION['username'] = $correo;
      $_SESSION["autentificadoUsuario"] = "SI";
      header("Location: inicioUsuario.php");
    }
    else{

      echo '
      <script>
        alert("ERROR DE AUTENTIFICACION");
        location.href = "index.php?errorusuario=SI";
      </script>
     ';
     }

 }
  mysqli_free_result($resultado);
  mysqli_close($conectar);

?>
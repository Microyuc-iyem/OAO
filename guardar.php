<?php
  require "conexion.php";

  $nomJuego = $_POST['nomJuego'];
  $descripcion = $_POST['descripcion'];
  $version = $_POST['version'];
  $lenguaje = $_POST['lenguaje'];
  $nomDesarrollador = $_POST['nomDesarrollador'];
  $link = $_POST['link'];
  $rutaTemporal = $_FILES['imagen']['tmp_name'];
  $rutaEnServidor = 'juegos';
  $nombreImagen = $_FILES['imagen']['name'];
  $pesoFoto = $_FILES['imagen']['size'];
  $tipoFoto = $_FILES['imagen']['type'];

  date_default_timezone_set('UTC');
  $nombreImagenUnico = date('Y-m-d-h-i-s')."-".$nombreImagen;

  $rutaDestino = $rutaEnServidor."/".$nombreImagenUnico;

  if($pesoFoto > 900000){
    echo '
      <script>
        alert("LA IMAGEN ES DEMASIADO PESADA");
        window.history.go(-1);
      </script>
    ';
    exit;
  }

  if($tipoFoto == "image/jpeg" or $tipoFoto == "image/png" or $tipoFoto == "image/jpg" or $tipoFoto == "image/svg+xml") {
    move_uploaded_file ($rutaTemporal,$rutaDestino );
  }
  else{
    echo '
      <script>
        alert("EL ARCHIVO NO ES UNA IMAGEN");
        window.history.go(-1);
      </script>
    ';
      exit;
    }

  $insertar = "INSERT INTO juegos (nomJuego,descripcion,version,lenguaje,nomDesarrollador,link,ruta) VALUES ('$nomJuego','$descripcion','$version','$lenguaje','$nomDesarrollador','$link','$rutaDestino')";

  $verficar_link = mysqli_query($conectar , "SELECT * FROM juegos WHERE link = '$link' ");
  if( mysqli_num_rows($verficar_link) > 0 ){
   echo '
   <script>
     alert("ESTE JUEGO YA ESTA REGISTRADO");
     location.href="formAgregar.php";
   </script>
 ';
 exit;
  }

  $query = mysqli_query($conectar, $insertar);

  if($query){
    echo '
      <script>
        alert("SE GUARDARON LOS DATOS CORRECTAMENTE");
        location.href="formAgregar.php";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert("ERROR: NO SE GUARDARON LOS DATOS");
        location.href="formAgregar.php";
      </script>
    ';
  }

?>
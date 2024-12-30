<?php
  session_start();
  session_destroy();
?>
<html>
<head>
<title>Contenido no seguro</title>
<META HTTP-EQUIV=Refresh CONTENT="2; URL=inicioAdmin.php">
<link rel="stylesheet" type="text/css" href="estilos.css">
<meta charset="utf-8">
</head>
<body>
      <?php
        echo '
        <script>
          alert("LA SESIÓN SE CERRO DE MANERA CORRECTA");
          location.href="index.php";
        </script>
      ';
      ?>
</body>
</html>
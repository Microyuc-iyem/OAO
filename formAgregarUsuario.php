<?php
    require "seguridadUsuario.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>OAO</title>
</head>
<body>
    <div id="icono">
        <a href="inicioUsuario.php" ><img id="home" src="imagenes/home.png" alt=""></a>
    </div>

    <div id="contenedorCompleto2">

        <div id="inicio">
            <h1>OAO</h1>
            <h3>Objeto de Aprendizaje Oral</h3>
            <div id="contenedorSesion">
                <p>Agregar Juego</p>
                <br>
                <?php
                $errorusuario = isset($_GET["errorusuario"]);
                if($errorusuario == "SI"){
                    echo '<h3 class="aviso">DATOS INCORRECTOS</h3></font><br><br>';
                }
                ?>
            <form action="guardarUsuario.php" method="post" enctype="multipart/form-data">
                <input class="campos" type="text" name="nomJuego" placeholder="  * Nombre del juego" required>
                <br>
                <textarea class="campos" name="descripcion" id="" cols="30" rows="10" placeholder="  * Descripción" required></textarea>
                <br>
                <input class="campos" type="text" name="version" placeholder="  * Versión" required>
                <br>
                <input class="campos" type="text" name="lenguaje" placeholder="  * Lenguaje" required>
                <br>
                <input class="campos" type="text" name="nomDesarrollador" placeholder="  * Nombre del desarrollador" required>
                <br>
                <input class="campos" type="text" name="link" placeholder="  * Link del juego" required>
                <br>
                <label for=""><span >*</span> Imagen del juego:</label>
                <br>
                <input class="campos" type="file" name="imagen" placeholder="  * Imagen del juego" required>
                <br><br><br>
                <input id="acceder" type="submit" value="Agregar" >
            </form>
            </div>
            <br><br>
        </div>
    </div>
</body>
</html>
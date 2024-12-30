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
    <div id="contenedorCompleto">
        <div id="inicio">
            <h1>OAO</h1>
            <h3>Objeto de Aprendizaje Oral</h3>
            <div id="contenedorSesion">
                <p>Iniciar Sesión</p>
                <br>
                <?php
                $errorusuario = isset($_GET["errorusuario"]);
                if($errorusuario == "SI"){
                    echo '<h3 class="aviso">DATOS INCORRECTOS</h3></font><br><br>';
                }
                ?>
            <form action="autentificacion.php" method="post">
                <input class="campos" type="text" name="correo" placeholder="  * Correo electrónico" required>
                <br>
                <input class="campos" type="password" name="contrasena" placeholder="  * Contraseña" required>
                <br><br><br>
                <div>
                    <input id="acceder" type="submit" value="Acceder">
                    <a id="registro" href="registro.php">Registrarse</a>

                </div>
            </form>
            </div>
            <br><br>
        </div>
    </div>
</body>
</html>
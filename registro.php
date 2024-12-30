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
    <div id="icono" class="icono2">
        <a href="index.php" id="sesion">Iniciar Sesión</a>
    </div>
    
    <div id="contenedorCompleto2">
        
        <div id="inicio">
            <h1>OAO</h1>
            <h3>Objeto de Aprendizaje Oral</h3>
            <div id="contenedorSesion">
                <p>Crear Cuenta Nueva</p>
                <br>
                <?php
                $errorusuario = isset($_GET["errorusuario"]);
                if($errorusuario == "SI"){
                    echo '<h3 class="aviso">DATOS INCORRECTOS</h3></font><br><br>';
                }
                ?>
            <form action="guardarRegistro.php" method="post" enctype="multipart/form-data">
                <input class="campos" type="text" name="nombres" placeholder="  * Nombres" required>
                <br>
                <input class="campos" name="apellidoPaterno" placeholder="  * Apellido Paterno" required></input>
                <br>
                <input class="campos" type="text" name="apellidoMaterno" placeholder="  * Apellido Materno" required>
                <br>
                <input class="campos" type="text" name="telefono" placeholder="  * Teléfono o Celular" required>
                <br>
                <input class="campos" type="text" name="correo" placeholder="  * Correo Electrónico" required>
                <br>
                <input class="campos" type="password" name="contrasena" placeholder="  * Contraseña" required>
                <br>
                <br><br><br>
                <input id="acceder" type="submit" value="Agregar">
            </form>
            </div>
            <br><br>
        </div>
    </div>
</body>
</html>
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

<div id="contenedorUsuario">

       <?php
            include "encabezado.php";
        ?>

    <div id="contMostrar">
        <?php
            include "conexion.php";
            $todos= "SELECT * FROM juegos";
            $resultado = mysqli_query($conectar, $todos);
            while ($row = mysqli_fetch_assoc($resultado)){
        ?>

        <div id="tabla">
            <div>
                <table>
                        <tr>
                            <td rowspan="3" id="imagen" ><div id="contImg"><img src="<?php echo $row["ruta"]; ?>" > </div></td>
                        </tr>
                        <tr>
                            <td id="nombre"><?php echo $row["nomJuego"]; ?></td>
                        </tr>
                        <tr>
                            <td id="descripcion"><?php echo $row["descripcion"]; ?></td>
                        </tr>
                        <tr>
                            <td id="jugar" colspan="2"><a href="<?php echo $row["link"]; ?>">JUGAR</a></td>
                        </tr>
                </table>
            </div>
        </div>
                    <?php
                    }
                    mysqli_free_result($resultado);
                    ?>
    </div>
    
</div>
</body>
</html>
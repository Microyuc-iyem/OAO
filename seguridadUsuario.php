<?php
session_start();
if ($_SESSION["autentificadoUsuario"] != "SI"){
	header("Location: index.php");
	exit();
}
?>
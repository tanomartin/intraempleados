<?php session_save_path("sesiones");
session_start();
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_httponly', 1);
include ("conexion.php");

if(empty($_SESSION) || $_SESSION['id'] == null || $_SESSION['id'] == ''){
	header("Location: logout.php");
	exit(0);
} else {
    $id = $_SESSION['id'];
	$sql = "SELECT acceso FROM usuarios WHERE id = $id";
	$result = mysql_query($sql,$db);
	$rowUsuario = mysql_fetch_assoc($result);
	if ($rowUsuario['acceso'] == 0) {
		header("Location: actualizando.php");
		exit(0);
	}
}
?>
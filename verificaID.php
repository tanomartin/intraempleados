<?php session_save_path("sesiones");
session_start();
include ("conexion.php");
$cant = 0;
if (isset($_POST['usuario']) && isset($_POST['pass'])) {
	$sql = "SELECT * FROM usuarios WHERE nombre = '".$_POST['usuario']."' AND clave = '".$_POST['pass']."'";
	$result = mysql_query($sql,$db);
	$cant = mysql_num_rows($result);
	if ($cant > 0) {
		$row = mysql_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['ultimoingreso'] = $row['ultimoingreso'];
		$_SESSION['nombre'] = $row['nombre'];
		
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$ahora = date("Y-m-d H:i:s");
		$sql = "UPDATE usuarios SET ultimoingreso = '$ahora' where id = ".$row['id'];
		$result = mysql_query($sql,$db);
	}
}
echo $cant;

?>

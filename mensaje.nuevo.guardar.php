<?php include ("verificaSesion.php"); 

$tipo = $_POST['tipo'];
$destino = $_POST['destino'];
$mensaje = preg_replace('([^A-Za-z0-9 ])', '', $_POST['mensaje']);
$creador = $_SESSION['id'];
$insertMensaje = "INSERT INTO mensajes VALUES(DEFAULT,$tipo,$destino,'$mensaje',$creador,CURRENT_TIMESTAMP())";
try {
    $dbname = "sistem22_empleados";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();
    
    $dbh->exec($insertMensaje);
    $dbh->commit();
    
    echo 1;
} catch (PDOException $e) {
    echo 0;
    $dbh->rollback();
}
?>
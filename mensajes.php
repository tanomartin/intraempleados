<?php include ("verificaSesion.php"); 

$id = $_SESSION['id'];
$iddpto = $_SESSION['dpto'];
$mensajes = array();
$sqlRecibido = "SELECT m.*, DATE_FORMAT(m.fecha,'%d/%m/%Y %h:%i:%s') as fecha, u.nombre as nombrecreador
                    FROM mensajes m, usuarios u 
                    WHERE ((tipo = 0) or (tipo = 1 and iddestino = $id) or (tipo = 2 and iddestino = $iddpto)) and
                          m.creador = u.id";
$resRecibido = mysql_query($sqlRecibido,$db);
$canRecibido = mysql_num_rows($resRecibido); 
if ($canRecibido > 0) {
    while ($rowRecibidos = mysql_fetch_assoc($resRecibido)) {
        $mensajes[$rowRecibidos['id']] = $rowRecibidos;
        $mensajes[$rowRecibidos['id']]['T'] = "R"; 
    }
}

$sqlEnviados = "SELECT m.*, DATE_FORMAT(m.fecha,'%d/%m/%Y %h:%i:%s') as fecha, u.nombre as nombrecreador, 
                       departamentos.nombre as depart, 
                       usuarios.nombre as usuario
                    FROM usuarios u, mensajes m
                    LEFT JOIN usuarios ON usuarios.id = m.iddestino
                    LEFT JOIN departamentos ON departamentos.id = m.iddestino
                    WHERE creador = $id and m.creador = u.id";
$resEnviados = mysql_query($sqlEnviados,$db);
$canEnviados = mysql_num_rows($resEnviados);
if ($canEnviados > 0) {
    while ($rowEnviados = mysql_fetch_assoc($resEnviados)) {
        $mensajes[$rowEnviados['id']] = $rowEnviados;
        $mensajes[$rowEnviados['id']]['T'] = "E"; 
    }
}

$totalMensajes = $canRecibido + $canEnviados;
krsort($mensajes);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Roboto:500,700' rel='stylesheet' type='text/css'/>
<script type="text/javascript" src="include/js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="include/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<div class="row" align="center" style="background-color: #f5f5f5;">
			<?php include_once ("navbar.php"); ?>
			<h2 class="page-header">
				<i style="font-size: 50px" class="glyphicon glyphicon-envelope"></i><br>MENSAJES
			</h2>
			<a href="mensajes.nuevo.php" class="btn btn-primary">Enviar Mensaje</a>
			<div class="row" style="margin: 15px">			
			<?php if ($totalMensajes != 0) { 
				    foreach ($mensajes as $id=>$mensaje) { 				        
    				    $tipo = 'General';
    				    $destino = "";
    				    if ($mensaje['tipo'] == 1) { $tipo = 'Personal'; };
    				    if ($mensaje['tipo'] == 2) { $tipo = 'Departamento'; };
    				    $style = 'style = "text-align: left; margin: -5px; background-color: white"';
    				    if ($mensaje['T'] == 'E') {
    				       $style = 'style = "text-align: right; margin: -5px; background-color: #33FF99;"';
    				       if ($mensaje['tipo'] == 1) { 
    				           $destino = " - ".$mensaje['usuario'];
    				       }
    				       if ($mensaje['tipo'] == 2) {
    				           $destino = " - ".$mensaje['depart'];
    				       }
    				    } ?> 
    				    <div class="panel panel-default text-center" style="margin-top: -5px">	
						   <div class="panel-body" <?php echo $style ?>>
								<p style="margin: -5px">[<?php echo "#$id - $tipo$destino" ?>]<br> 
									<?php echo $mensaje['mensaje'] ?><br>
									<b><?php echo $mensaje['nombrecreador']." | ".$mensaje['fecha'] ?></b>
								</p>
						   </div>	
						</div>	
			    <?php } ?>
    		 <?php } else { ?>	
    					<div class="panel-heading">
							<h2 class="panel-title"><b>Sin mensajes al momento</b></h2>
						</div>
    		 <?php } ?>
    		</div>			
    		<?php include_once ("footer.php"); ?>												  
		</div>	
	</div>
</body>
</html>
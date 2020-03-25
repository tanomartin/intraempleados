<?php include ("verificaSesion.php");

$id = $_SESSION['id'];
$sql = "SELECT u.*, departamentos.nombre as dpto FROM usuarios u 
          LEFT JOIN departamentos ON departamentos.id = u.departamento 
          WHERE u.id = $id";
$result = mysql_query($sql,$db);
$row = mysql_fetch_assoc($result);?>

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
				<i style="font-size: 50px" class="glyphicon glyphicon glyphicon-user"></i><br>INFORMACION USUARIO
			</h2>
			
			<div class="row" style="margin: 15px">
				<div class="col-md-3">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h2 class="panel-title">
								<b>Nombre</b>
							</h2>
        				</div>
        				<div class="panel-body" style="text-align: center;">
                            <?php echo $row['nombre']?>
                         </div>
        			</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h2 class="panel-title">
								<b>Departamento</b>
							</h2>
        				</div>
        				<div class="panel-body" style="text-align: center;">
                            <?php echo $row['dpto']?>
                         </div>
        			</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h2 class="panel-title">
								<b>Nombre PC Trabajo</b>
							</h2>
        				</div>
        				<div class="panel-body" style="text-align: center;">
                            <?php echo $row['nombrepc']?>
                         </div>
        			</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h2 class="panel-title">
								<b>Ingreso</b>
							</h2>
        				</div>
        				<div class="panel-body" style="text-align: center;">
                            <?php echo "US: <b>".$row['usuariosistema']."</b> - PW: <b>".$row['passsistema']."</b>" ?>
                         </div>
        			</div>
				</div>
			</div>
			<?php include_once ("footer.php"); ?>
		</div>
	</div>
</body>
</html>
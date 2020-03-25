<?php include ("verificaSesion.php"); ?>

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
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div class="container">
		<div class="row" align="center" style="background-color: #f5f5f5;">
			
			<?php include_once ("navbar.php"); ?>
			
			<h2 class="page-header" style="color: blue">
				ESCRITORIO DE TRABAJO A DISTANCIA <br> 
				O.S.P.I.M. <br> 
				<font color="brown">U.S.I.M.R.A. </font>
			</h2>
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default text-center">
					<p style="text-align: justify; margin: 15px">Por intermedio de esta aplicación estamos intentando crear un espacio de intercambio comunicacional y de trabajo colaborativo, entre los distintos componentes de la gestión administrativa de la U.S.I.M.R.A. y la O.S.P.I.M.<br>
					Los acontecimientos en que nos coloca la actual crisis sanitaria, y de acuerdo con la necesidad relacionada al cuidado de la salud y el compromiso asumido en la lucha contra la propagación del COVID19, 
					nos pone ante el desafío de afrontar el esfuerzo de generar herramientas tecnológicas con la máxima creatividad y con el objetivo primordial de cuidar a todas las personas que dan vida a ambas organizaciones.<br> 
					La U.S.I.M.R.A. y la O.S.P.I.M. somos todos: beneficiarios, empleados y directivos. Cuidemos a cada uno de ellos, para cuidarnos a cada uno de nosotros.<br>
					Cuidémonos entre todos.</p>
         			<p style="text-align: right; margin: 15px">
         				<b>Secretariado Nacional U.S.I.M.R.A.<br>
         				   Consejo Directivo O.S.P.I.M.
         				</b>
         			</p>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-1">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h3 class="panel-title">Comunicaciones</h3>
						</div>
						<div class="panel-body">
							<i style="font-size: 100px"  class="glyphicon glyphicon-info-sign"></i>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="comunicacion.php" class="btn btn-primary">Ingresar</a></li>
						</ul>
					</div>
				</div>
			 	<div class="col-md-4 col-md-offset-2">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h3 class="panel-title">Contenido</h3>
						</div>
						<div class="panel-body">
							<i style="font-size: 100px"  class="glyphicon glyphicon-tasks"></i>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="contenido.php" class="btn btn-primary">Ingresar</a></li>
						</ul>
					</div>
				</div> 
			<?php include_once ("footer.php"); ?>
		</div>
	</div>
</body>
</html>




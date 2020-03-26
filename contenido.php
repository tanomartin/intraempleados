<?php include ("verificaSesion.php"); 

$id = $_SESSION['id'];
$sql = "SELECT * FROM emails WHERE idusuario = $id";
$result = mysql_query($sql,$db);
$cant = mysql_num_rows($result); ?>

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
				<i style="font-size: 50px" class="glyphicon glyphicon-tasks"></i><br>CONTENIDO
			</h2>
			
			<div class="row" style="margin: 15px">
    			<h3 style="margin-top: -4px">Uso del correo electrónico a través de web mail</h3>
    			<div class="col-md-6">
    				<p align="justify">
    				   A continuación encontrarás la información para poder acceder a tus correos electrónicos a través de web mail. <br>
    				   - Si el dominio de tus cuentas es <b>@ospim.com.ar</b>, debes ingresar al siguiente link: <a href="http://www.ospim.com.ar/webmail" target="_blank">www.ospim.com.ar/webmail</a>.<br> 
    				   - Si el dominio de tus cuentas es <b>@usimra.com.ar</b>, debes ingresar al siguiente link: <a href="http://www.usimra.com.ar/webmail" target="_blank">www.usimra.com.ar/webmail</a>.<br> 
					   A continuación los datos para acceder.
					</p>
					<div class="panel panel-default">
						<div class="panel-body">
						<?php if ($cant > 0) {   ?>
						    <h4 style="margin-top: -4px">Su información de acceso a la/s cuentas</h4>					    
						<?php   while ($row = mysql_fetch_assoc($result)) {  ?>
                					<hr>
                					<b>Dirección de correo electrónico: <font color="blue"><?php echo $row['email'] ?></font></b><br>
                					<b>Contraseña: <font color="blue"><?php echo $row['clave'] ?></font></b>
                	      <?php }
            			      } else { ?>
            			    	<h4>Usted no posee correo electronico asignado para acceder</h4>
            			<?php } ?>
    					</div>
    				</div>
    				<p align="justify">
    					A la derecha de la pantalla te dejamos un video explicativo que te muestra, paso a paso, como acceder a tus correos electrónicos a través del web mail.
    				</p>
    				
    			</div>
    			<div class="col-md-6">
                  	<video width="100%" controls>
                      <source src="files/videos/webmail.mp4" type="video/mp4">
                    </video>
                </div>														  
			</div>
			<hr>
			<div class="row" style="margin: 15px">
				<h3 style="margin-top: -4px">Instalacion de Teamweaver (escritorio remoto)</h3>
				<div class="col-md-6">
                  	<video width="100%" controls>
                      <source src="files/videos/instateam.mp4" type="video/mp4">
                    </video>
                </div>	
    			<div class="col-md-6">
    				<p align="justify">
    				    Teamviewer es un programa de escritorio remoto, con el cual tendrás la posibilidad de ejecutar tus tareas de trabajo a distancia, 
                        en forma natural y transparente, como si estuvieras sentado delante de tu computadora en el trabajo.<br>
                        La implementación del escritorio remoto, implica el acometer acciones en los dos extremos de la cadena de trabajo a distancia, un extremo es 
                        tu computadora en el trabajo y el otro tu computadora personal en tu casa. <br>
                        Ambas acciones requieren de la presencia física para ejecutarlas; del primer extremo de la cadena de conexión (tu computadora en tu oficina del trabajo) se va 
                        a encargar el depto. de sistemas, para lo cual te contactaremos a través de un mensaje electrónico por WhatsApp. Para el segundo extremo (tu computadora personal en tu casa), vamos a apelar a tu 
                        predisposición para que acometas la acción de instalación vos mismo. 
                        No te asustes!!! Es muy sencillo y solo te vamos a pedir que cubras una mínima instancia de todo el procedimiento, hasta el punto en que nosotros podamos 
                        tomar el control remoto para terminar de cubrir todo el procedimiento de configuración y puesta en marcha. <br>
                        <b>Es importante que entiendas que NO TENES QUE HACER NADA hasta que nosotros te contactemos vía WhatsApp.</b><br>
                        Estamos trabajando sin descanso para acercarte soluciones y que puedas resolver tus tareas laborales. <br>
                        Te pedimos paciencia y respeto de las formalidades que te estamos comunicando.<br>
                        Cuidémonos entre todos!!!<br>
					</p>
    				<p align="justify">
    					
    				</p>
    				
    			</div>
														  
			</div>
			<?php include_once ("footer.php"); ?>
		</div>
	</div>
</body>
</html>
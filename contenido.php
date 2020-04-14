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
    			<h3>Guardado e Importanci�n de correos electronicos en web mail</h3>
    			<div class="col-md-6">
                  	<video width="100%" controls>
                      <source src="files/videos/guardaremail.mp4" type="video/mp4">
                    </video>
                </div>	
    			<div class="col-md-6">
    				<p align="justify">
    					Para poder resguardar los mensajes de correo electr�nico que sean necesarios, los mismos 
    					se pueden guardar en tu computadora local en formato ".eml", 
    					en este archivo se resguarda toda la informaci�n del correo electr�nico, su contenido, el remitente, 
    					archivos adjuntos, fecha de recepci�n.<br>
						Un vez resguardado hay que eliminar el mensaje de la bandeja de entrada y de la papelera de 
						reciclaje, como se muestra en otra entrada de esta p�gina, para poder liberar espacio en el servidor.<br>
						En el caso que se necesite que el mensaje de correo electr�nico vuelva a estar en la bandeja de entrada 
						para su utilizaci�n a trav�s de web mail, se puede importar el mismo a trav�s del mismo webmail. 
    				</p>
    				<p align="justify">
    					A la izquierda de la pantalla te dejamos un video explicativo que te muestra, paso a paso, 
    					como guardar un mensaje de correo electr�nico y su posterior importaci�n.
    				</p>
				</div>
				
			</div>
			<hr>
			
			<div class="row" style="margin: 15px">
    			<h3>Nuevo M�dulo de mensajes</h3>
    			<div class="col-md-6">
    				<p align="justify">
    					Se puso en funcionamiento un nuevo modulo dentro de la Intranet de Empleados para enviar mensajes laborales.<br>
    					En el mismo usted podr� enviar mensajes a otros usuarios (mensajes individuales), 
    					a un departamento completo o un mensaje general para todos los usuarios.<br>
    					Se pide por favor utilizarlo s�lo para mensajes laborales, los mismos quedaran guardados en nuestra base de datos. <br> 
    					Este m�dulo ira actualizandose, agregando mejoras al mismo, las cuales ser�n informadas por este medio.<br> 
    					Cualquier inconveniente o mal funcionamiento que encuentre en este nuevo m�dulo, por favor comunicarla al departamento de sistemas.
    				</p>
				</div>
				<div class="col-md-6">
                  	<img class="img-responsive" src="images/mensajes.png"/>
                </div>	
			</div>
			<hr>
			<div class="row" style="margin: 15px">
    			<h3>Eliminaci�n de correos electr�nicos en web mail (���IMPORTANTE!!!)</h3>
    			<div class="col-md-6">
                  	<video width="100%" controls>
                      <source src="files/videos/eliminamail.mp4" type="video/mp4">
                    </video>
                </div>	
    			<div class="col-md-6">
    				<p align="justify">
    					Con el objetivo de optimizar y controlar el tr�fico digital que las actuales circunstancias est�n generando, 
                        en relaci�n al volumen de uso de dispositivos electr�nicos y herramientas de comunicaciones, 
                        estamos recomendando que se le preste especial atenci�n a los tiempos muertos que se generan en las conexiones 
                        establecidas en la modalidad de trabajo a distancia y especialmente en el uso de los correos electr�nicos v�a web mail.<br>
                        Si est�s trabajando y en alg�n momento atendes otra tarea, no dejes tu conexi�n abierta, cerrala tal cual como te aconsejamos 
                        oportunamente hasta que retomes tu trabajo; esto es posible de hacer sin inconvenientes tantas veces como lo requieras. <br>
                        Adem�s, toma como regla, eliminar los mensajes de correo electr�nico que consideres ya atendidos y  que no te sirvan para 
                        continuar desarrollando una tarea posterior; esto cuenta tanto para los emails nuevos que estas recibiendo, 
                        como para aquellos que ya tenias almacenados con anterioridad. <br>
                        De esta forma estamos colaborando con mantener operativa nuestra propia infraestructura de acceso remoto y 
                        la red global de comunicaciones de �ndole nacional, y optimizamos el uso de los recursos digitales. <br>
                        Gracias por atender este consejo.
    				</p>
    				<p align="justify">
    					A la izquierda de la pantalla te dejamos un video explicativo que te muestra, paso a paso, como eliminar los correos electr�nicos a trav�s del web mail.
    				</p>
				</div>
			</div>
			<hr>
			<div class="row" style="margin: 15px">
    			<h3>Uso del correo electr�nico a trav�s de web mail</h3>
    			<div class="col-md-6">
    				<p align="justify">
    				   A continuaci�n encontrar�s la informaci�n para poder acceder a tus correos electr�nicos a trav�s de web mail. <br>
    				   - Si el dominio de tus cuentas es <b>@ospim.com.ar</b>, debes ingresar al siguiente link: <a href="http://www.ospim.com.ar/webmail" target="_blank">www.ospim.com.ar/webmail</a>.<br> 
    				   - Si el dominio de tus cuentas es <b>@usimra.com.ar</b>, debes ingresar al siguiente link: <a href="http://www.usimra.com.ar/webmail" target="_blank">www.usimra.com.ar/webmail</a>.<br> 
					   A continuaci�n los datos para acceder.
					</p>
					<div class="panel panel-default">
						<div class="panel-body">
						<?php if ($cant > 0) {   ?>
						    <h4 style="margin-top: -4px">Su informaci�n de acceso a la/s cuentas</h4>					    
						<?php   while ($row = mysql_fetch_assoc($result)) {  ?>
                					<hr>
                					<b>Direcci�n de correo electr�nico: <font color="blue"><?php echo $row['email'] ?></font></b><br>
                					<b>Contrase�a: <font color="blue"><?php echo $row['clave'] ?></font></b>
                	      <?php }
            			      } else { ?>
            			    	<h4>Usted no posee correo electronico asignado para acceder</h4>
            			<?php } ?>
    					</div>
    				</div>
    				<p align="justify">
    					A la derecha de la pantalla te dejamos un video explicativo que te muestra, paso a paso, como acceder a tus correos electr�nicos a trav�s del web mail.
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
				<h3>Instalacion de Teamweaver (escritorio remoto)</h3>
				<div class="col-md-6">
                  	<video width="100%" controls>
                      <source src="files/videos/instateam.mp4" type="video/mp4">
                    </video>
                </div>	
    			<div class="col-md-6">
    				<p align="justify">
    				    Teamviewer es un programa de escritorio remoto, con el cual tendr�s la posibilidad de ejecutar tus tareas de trabajo a distancia, 
                        en forma natural y transparente, como si estuvieras sentado delante de tu computadora en el trabajo.<br>
                        La implementaci�n del escritorio remoto, implica el acometer acciones en los dos extremos de la cadena de trabajo a distancia, un extremo es 
                        tu computadora en el trabajo y el otro tu computadora personal en tu casa. <br>
                        Ambas acciones requieren de la presencia f�sica para ejecutarlas; del primer extremo de la cadena de conexi�n (tu computadora en tu oficina del trabajo) se va 
                        a encargar el depto. de sistemas, para lo cual te contactaremos a trav�s de un mensaje electr�nico por WhatsApp. <br>
                        Para el segundo extremo (tu computadora personal en tu casa), vamos a apelar a tu predisposici�n para que acometas la acci�n de instalaci�n vos mismo. 
                        No te asustes!!! Es muy sencillo y solo te vamos a pedir que cubras una m�nima instancia de todo el procedimiento, hasta el punto en que nosotros podamos 
                        tomar el control remoto para terminar de cubrir todo el procedimiento de configuraci�n y puesta en marcha. <br>
                        <b>Es importante que entiendas que NO TENES QUE HACER NADA hasta que nosotros te contactemos v�a WhatsApp.</b><br>
                        Estamos trabajando sin descanso para acercarte soluciones y que puedas resolver tus tareas laborales. <br>
                        Te pedimos paciencia y respeto de las formalidades que te estamos comunicando.<br>
                        Cuid�monos entre todos!!!<br>
                        A la izquierda de la pantalla te dejamos un video explicativo que te muestra, paso a paso, como realizar la instalaci�n.
					</p>
    			</div>								  
			</div>
			<?php include_once ("footer.php"); ?>
		</div>
	</div>
</body>
</html>
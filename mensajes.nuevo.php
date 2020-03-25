<?php include ("verificaSesion.php"); 

$sqlUsuarios = "SELECT * FROM usuarios";
$resUsuarios = mysql_query($sqlUsuarios,$db);

$sqlDepartamentos = "SELECT * FROM departamentos";
$resDepartamentos = mysql_query($sqlDepartamentos,$db);
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
				<i style="font-size: 50px" class="glyphicon glyphicon-envelope"></i><br>NUEVO MENSAJES
			</h2>
			<h4><span id="divMensajeOK" style="color: green; display: none" class="clearfix">Mensaje enviado con exito</span></h4>
			<h4><span id="divMensajeNOOK" style="color: red;  display: none" class="clearfix">Error al enviar el mensaje</span></h4>	
			<form id="form_nuevo_mensaje" style="max-width: 600px">
				<label for="tipo">Tipo de Mensaje</label>
                <select class="form-control" id="tipo" required="required">
                	<option value="">Seleccione una opcion</option>
                    <option value="0">General</option>
                    <option value="1">Personal</option>
                    <option value="2">Departamento</option>
                </select>
                <label for="tipo" style="margin: 10px">Destinatario (* si es un mensaje general no se mostrara nada)</label>
                <select style="display: none" class="form-control" id="destinoUsuario">
                	<option value="">Seleccione un Usuario</option>
                	<?php while ($rowUsuarios = mysql_fetch_assoc($resUsuarios)) { ?>
                			<option value="<?php echo $rowUsuarios['id']?>"><?php echo $rowUsuarios['nombre']?></option>
                	<?php } ?>
                </select>
                <select style="display: none" class="form-control" id="destinoDepartamento">
                	<option value="">Seleccione un Departamento</option>
                	<?php while ($rowDepartamentos = mysql_fetch_assoc($resDepartamentos)) { ?>
                			<option value="<?php echo $rowDepartamentos['id']?>"><?php echo $rowDepartamentos['nombre']?></option>
                	<?php } ?>
                </select>
                <div class="form-group">
                  <label for="mensaje" style="margin: 10px">Mensaje</label>
                  <textarea class="form-control" rows="5" id="mensaje" required="required"></textarea>
                </div>
                <button style="margin: 10px" type="submit" id="submit" name="submit" class="btn btn-large btn-success">ENVIAR</button>
			</form>	
    		<?php include_once ("footer.php"); ?>												  
		</div>	
	</div>
</body>
<script type="text/javascript">

	$("#tipo").change(function( event ) {
		$("#destinoUsuario").css("display", "none");
		$("#destinoDepartamento").css("display", "none");
		$("#destinoUsuario").prop('required', false);
		$("#destinoDepartamento").prop('required', false);
		if (event.target.value == 1) {
			$("#destinoUsuario").css("display", "block");
			$("#destinoUsuario").prop('required', true);
		}
		if (event.target.value == 2) {
			$("#destinoDepartamento").css("display", "block");
			$("#destinoDepartamento").prop('required', true);
		}
	});

	$("#form_nuevo_mensaje").submit(function( event ) {
		$("#submit").prop('disabled', true);
		var tipo = $('#tipo').val();
		var destino = 0;
		if (tipo == 1) {
			destino = $("#destinoUsuario").val();
		}
		if (tipo == 2) {
			destino = $("#destinoDepartamento").val();
		}
		var mensaje = $('#mensaje').val();
		$.post("mensaje.nuevo.guardar.php", {tipo : tipo, destino: destino, mensaje: mensaje}, function(data) {
			console.log(data);
			if (data == 1) {
				$("#divMensajeOK").css("display", "block");
			} else {
				$("#divMensajeNOOK").css("display", "block");
			}
		});
		return false;
	});
	
</script>
</html>
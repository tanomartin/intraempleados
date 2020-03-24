<nav class="navbar navbar-default navbar-static-top" style="min-height: 65px">
	<div class="navbar-header" style="margin-left: 10px; margin-top: 7px">
		<a class="navbar-brand" href="menu.php"> <img style="max-width:38px; margin-top: -9px;" src="images/logo.png"></a>
	</div>
	<div class="nav navbar-top-links navbar-right" style="margin-right: 3px">
		<a class="navbar-brand"><?php echo $_SESSION['nombre'] ?> <font size="2px" ><br>(U.A.: <?php echo $_SESSION['fechaultimoacceso'] ?>)</font> </a>
		<a style="margin: 11px 10px 0 0"  href="logout.php" class="btn btn-info"><span title="Salir" class="glyphicon glyphicon-log-out"></span></a>
	</div>
	<ul class="nav navbar-nav navbar-left" style="margin-top: 5px">
		<li><a href="comunicacion.php">COMUNICACIONES</a></li>
		<li><a href="contenido.php">CONTENIDO</a></li>
		<li><a href="infousuario.php">INFO. USUARIO</a></li>
	</ul>
</nav>
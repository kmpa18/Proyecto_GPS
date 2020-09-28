<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">
</head>
<body>
	<?php
	$n = $_POST['nickname'];
	$p = $_POST['password'];
	$hash = md5($p);

	$bd= mysqli_connect('127.0.0.1','root','');
	if(!$bd){
		echo "Error de conexion con la DataBase";
	}
	if(!mysqli_select_db($bd, 'prueba')){
		echo "Error de conexion con la tabla";	
	}

	$query= "SELECT * FROM login where pwrd='$hash' AND usuario='$n'";
	$answer= mysqli_query($bd, $query);

	$acepted=0;
	$user="";
	while($row = mysqli_fetch_array($answer)){
		$user= $row["usuario"];
		$acepted++;
	}
	if($acepted>0){
		//echo "Acceso Permitido";
		?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<br><br>
					<font size="15" color="white">MENÚ PRINCIPAL</font>
					<br><br>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">

			</div>
			<div class="col-md-4">
				<center>					
					<form method="post" action="registrarUsuario.php">
						<input type="hidden" name="u" value="<?php echo $user?>"/>
						<button class="btn third">Registrar Nuevo Usuario</button>	
					</form>
					<form method="post" action="verUsuario.php">
						
						<button class="btn third">Lista Usuario</button>	
					</form>
					<form method="post" action="verUbicaciones.php">
						<input type="hidden" name="u" value="<?php echo $user?>"/>
						<button class="btn third">Ver Lista Ubicaciones</button>	
					</form>
					
				</center>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>

	<?php
	}else{
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br><br><br><br><br><br><br><br><br>
					<center>
						<font size="8" color="white">
							<a href="../index.php"><?php echo "ACCESO DENEGADO"; ?></a>
						</font>
					</center>		
				</div>
			</div>
		</div>
		<?php
	}	
	?>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
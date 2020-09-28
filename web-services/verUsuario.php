<!DOCTYPE html>
<html>
<head>
	<title>Ubicaciones</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
</head>
<body style="background-color: #2c3e50">
	<?php
	
	$bd= mysqli_connect('127.0.0.1','root','');
	if(!$bd){
		echo "Error de conexion con la Base De Datos";
	}
	if(!mysqli_select_db($bd, 'prueba')){
		echo "Error de conexion con la tabla";	
	}
	$query= "SELECT * FROM login";
	$answer= mysqli_query($bd, $query);
	?>
	<br><br>
	<div class="container">
		<div class="row">
			<table class="table table-dark">
				
				<tr>
					<td><center>Nombre Usuario</center></td>
					
				</tr>
				<?php
					while($row = mysqli_fetch_array($answer)){
					?>
				<tr>
					<td><center><?php echo $row["usuario"]?></center></td>
					<td>
						<form method="post" action="borrarUsuario.php">
							<input type="hidden" name="id" value="<?php echo $row["id"]?>"/>
							<center>
								<button type="submit" class="btn btn-info">BORRAR</button>
							</center>
						</form>
					</td>
					
					<?php
					}
					?>
				</tr>
			</table>
		</div>
	</div>
			
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
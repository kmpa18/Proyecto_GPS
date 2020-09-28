<!DOCTYPE html>
<html>
<head>
	<title>Ubicaciones</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
</head>
<body style="background-color: #2c3e50">
	<?php
	$filter = $_POST['filtro'];
	
	$bd= mysqli_connect('127.0.0.1','root','');
	if(!$bd){
		echo "Error de conexion con la Base De Datos";
	}
	if(!mysqli_select_db($bd, 'prueba')){
		echo "Error de conexion con la tabla";	
	}
	$query= "SELECT * FROM location where device_Id='$filter'";
	$answer= mysqli_query($bd, $query);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br><br><br>
				<table class="table table-dark">
				<tr>
					<td><center>PLACA</center></td>
					<td><center>DIRECCION</center></td>
					<td><center>LATITUD</center></td>
					<td><center>LONGITUD</center></td>
					<td><center>FECHA</center></td>
					<td><center>HORA</center></td>
				</tr>
				<?php
					while($row = mysqli_fetch_array($answer)){
					?>
				<tr>
					<td><center><?php echo $row["device_Id"]?></center></td>
					<td><center><?php echo $row["direccion"]?></center></td>
					<td><center><?php echo $row["latitud"]?></center></td>
					<td><center><?php echo $row["longitud"]?></center></td>
					<td><center><?php echo $row["fecha"]?></center></td>
					<td><center><?php echo $row["hora"]?></center></td>
					<td>
						<form>
							<input type="hidden" name="lat" value="<?php echo $row["id"]?>"/>
							<center>
								<button type="submit" class="btn btn-info">Borrar</button>
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
	</div>
		<div class="row">
			
		</div>
	</div>	
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
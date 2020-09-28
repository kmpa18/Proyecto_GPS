
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body style="background-color:#2c3e50">
	<?php
	$nuevoUser=$_POST['usuario'];
	$nuevoPwrd=MD5($_POST['password']);
    $bd= mysqli_connect('127.0.0.1','root','');
    if(!$bd){
        echo "Error de conexion con la DataBase";
    }
    if(!mysqli_select_db($bd, 'prueba')){
        echo "Error de conexion con la tabla";  
    }

    $query= "INSERT INTO login(id, usuario, pwrd) VALUES (NULL, '$nuevoUser', '$nuevoPwrd')";
    
    ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<center>
    				<br><br><br><br><br><br><br><br>
    				<font size="20" color="white">
    					<?php
    			 		if(mysqli_query($bd, $query)){
    			 		echo "CONSULTA EXITOSA";
    			 		}else{
    			 		echo "ERROR EN CONSULTA";
    			 		}
    			 		?>
    			 		<br><br>
    			 		<a href="../index.php">Volver a Inicio</a>
    				</font>
    			
    			</center>		
    		</div>
    	</div>
    </div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>    
</body>
</html>
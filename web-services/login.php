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
	while($row = mysqli_fetch_array($answer)){
		echo $row["usuario"],"<br>";
		$acepted++;
	}
	if($acepted>0){
		echo "acepted";
	}else{
		echo "denied";
	}
?>
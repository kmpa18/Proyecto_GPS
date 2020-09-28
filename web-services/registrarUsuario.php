<!DOCTYPE html>
<html>
<head>
	<title>Crear</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body style="background-color:#2c3e50">
    	
	<br><br><br><br><br>
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="registrarConsulta.php">
                    <fieldset>
                        <legend class="text-center header" >
                        	<font color="white">Crear Nuevo Usuario</font></legend>

                        <center>
                        	<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Crear Usuario</button>
                            </div>
                        </div>	
                        </center>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
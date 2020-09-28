<?php
    if  ((!isset($_POST["device_Id"])) || (!isset($_POST["direccion"])) || (!isset($_POST["latitud"])) || (!isset($_POST["longitud"])) || (!isset($_POST["fecha"])) || (!isset($_POST["hora"])) )
        {
            $respuesta = array("estado"=>"errorpost");
            echo json_encode($respuesta);
            exit();
        }

        $device_Id = $_POST["device_Id"];        
        $direccion = $_POST["direccion"];
        $latitud = $_POST["latitud"];
        $longitud = $_POST["longitud"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        
        require_once '../query/gps.class.php';
        $objGps = new Gps();
        $objGps->setDevice_Id($device_Id);
        $objGps->setDireccion($direccion);
        $objGps->setLatitud($latitud);
        $objGps->setLongitud($longitud);
        $objGps->setFecha($fecha);
        $objGps->setHora($hora);
        
        if ($objGps->agregar()==TRUE){
            $respuesta = array("estado"=>"exito");
        }else{
            $respuesta = array("estado"=>"error","datos"=>"");
        }
        echo json_encode($respuesta);        
?>
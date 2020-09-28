<?php
    require_once '../dataBase/conexion.clase.php';
    class Gps extends Conexion{
        private $device_Id;
        private $direccion;
        private $latitud;
        private $longitud;
        private $fecha;
        private $hora;

  public function getDevice_Id()
  {
    return $this->device_Id;
  }
        
  public function setDevice_Id($device_Id)
  {
      $this->device_Id = $device_Id;
      return $this;
  }

  public function getDireccion()
  {
      return $this->direccion;
  }
  
  public function setDireccion($direccion)
  {
      $this->direccion = $direccion;
      return $this;
  }
  public function getLatitud()
  {
      return $this->latitud;
  }
  
  public function setLatitud($latitud)
  {
      $this->latitud = $latitud;
      return $this;
  }
  public function getLongitud()
  {
      return $this->longitud;
  }
  
  public function setLongitud($longitud)
  {
      $this->longitud = $longitud;
      return $this;
  }
  public function getFecha()
  {
      return $this->fecha;
  }
  
  public function setFecha($fecha)
  {
      $this->fecha = $fecha;
      return $this;
  }
  public function getHora()
  {
      return $this->hora;
  }
  
  public function setHora($hora)
  {
      $this->hora = $hora;
      return $this;
  }
  public function agregar() {
            
            $sql = "INSERT INTO location (id, device_Id, direccion, latitud, longitud, fecha, hora) VALUES (NULL, :dev, :dir, :lat, :lon, :fec, :hor);";
            
            $sentencia = $this->dblink->prepare($sql);
            $device_Id = $this->getDevice_Id();
            $direccion = $this->getDireccion();
            $latitud = $this->getLatitud();
            $longitud = $this->getLongitud();
            $fecha = $this->getFecha();
            $hora = $this->getHora();
            $sentencia->bindParam(":dev",  $device_Id);
            $sentencia->bindParam(":dir",  $direccion);
            $sentencia->bindParam(":lat", $latitud);
            $sentencia->bindParam(":lon", $longitud);
            $sentencia->bindParam(":fec", $fecha);
            $sentencia->bindParam(":hor", $hora);
            $resultado = $sentencia->execute();
            
            if ($resultado != 1){
                //ocurrio un error al insertar
                return FALSE;
            }
            
            //Insertó correctamente
            return TRUE;
            
        }    }
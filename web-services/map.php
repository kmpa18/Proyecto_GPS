<!DOCTYPE html>
<html>
<head>
  <title>Geo</title>
</head>
<body style="background-color: #2c3e50;" >
 <?php 
  $latitud = $_POST['lat'];
  $longitud = $_POST['lon'];
  //echo $latitud,$longitud;
?>

 <center>
  <div id="demo"></div>
  <div id="mapholder"></div>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>    
  <script type="text/javascript">
    var x=document.getElementById("demo");
    cargarmap();
    function cargarmap(){
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    
    function showPosition(position){
        lat= <?php echo $latitud; ?>;
        lon= <?php echo $longitud; ?>;
        latlon=new google.maps.LatLng(lat, lon)
        mapholder=document.getElementById('mapholder')
        mapholder.style.height='600px';
        mapholder.style.width='1200px';
      
        var myOptions={
          center:latlon,zoom:10,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          mapTypeControl:false,
          navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
        };

        var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
        var marker=new google.maps.Marker({
          position:latlon,
          map:map,
          //title:"You are here!"
        });
      }
    
    function showError(error){
      switch(error.code){
        case error.PERMISSION_DENIED:
              x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
              break;
          case error.POSITION_UNAVAILABLE:
              x.innerHTML="La información de la localización no esta disponible."
              break;
          case error.TIMEOUT:
              x.innerHTML="El tiempo de petición ha expirado."
              break;
          case error.UNKNOWN_ERROR:
              x.innerHTML="Ha ocurrido un error desconocido."
              break;
        }
      }
    }
</script> 
 </center>
  
</body>
</html>
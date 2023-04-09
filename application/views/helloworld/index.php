
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>
<style>
  body{
    margin: 0;
  }
  #ban{
    width: 100%;
    height: 22em;
    z-index: 0;
    position: absolute;
  }
  #tkiem{
    position: absolute;
    z-index: 1;
    height: 22em;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #khung{
    background-color: rgba(0, 0, 0, 0.7); 
    width: 70%;
    color: white;
  }
  #d1{
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .d2{
    width: 20%;
  }
  .ip{
    width: 95%;
    padding: 0.5em;
  }
  #btn_tk{
    width: 9em;
    padding: 0.3em;
    margin:1em;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ccd5ae;
  }
  #d3{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #mapid {
        height: 50.5em;
        }
        #khungmap{
            width:60%;
            float: left;
        }
</style>
<body>
  <?php
      if(isset($id) && !empty($id)){
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerKH.php");
      }
      else{
          require_once("C:/xampp/htdocs/HelloPHP/application/views/header.php");
      }
  ?>
  <div id="khungmap">
        <div id="mapid"></div>
        <div id="distancetravelled"></div>
    </div>
  <?php
  require_once("C:/xampp/htdocs/HelloPHP/application/views/footer.php");
  ?>
</body>
</html>
<script>
  var map = L.map('mapid').setView([10.762622, 106.660172], 8);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);  
  var mang = [];
  var mang2 = [];
  <?php foreach($ben as $b){ ?>
    mang.push(<?php echo $b->kinhdo;?>);  
    mang2.push(<?php echo $b->vido;?>);
  <?php }?>
  for(var i = 0; i < mang.length; i++)
  {
      L.marker([mang[i],mang2[i]]).addTo(map);
      const popupContent = "<b>Hello world!</b><br>I am a popup.";
      const popup = L.popup().setContent(popupContent);
  }
  
  var currentMarker;
  var currentCircle;
  map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if (currentMarker) {
        map.removeLayer(currentMarker);
        map.removeLayer(currentCircle);
    }
    var marker = L.marker([lat, lng]);
    var circle = L.circle(([lat,lng]),{
        color: 'blue',
        fillColor: 'blue',
        fillOpacity: 0.5,
        radius: 10000
    });
    marker.addTo(map);
    circle.addTo(map);
    currentMarker = marker;
    currentCircle = circle;
    var center = L.latLng([lat,lng]);;
    for(var i = 0; i < mang.length; i++)
    {
      var distance = center.distanceTo([mang[i],mang2[i]]);
        if( distance <= 10000 ){
          console.log([mang[i],mang2[i]]);
          // console.log(mangma[i]);
        }
    }
});
</script>

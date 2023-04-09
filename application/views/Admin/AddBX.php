<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        display: flex;
    }
    #khung1{
        width: 95.7%;
        display: flex;
        justify-content: space-around;
        height: 22em;
        padding: 1.5em;
        background-color: #1d3557;
        color: white;
    }
    #mapid {
    height: 100%;
    }
        #khungmap{
            width:70%;
            float: left;

        }
        #khungform{
            background-color: #1d3557;
            color: white;
            width: 30%;
            height: 22em;
        }
        #khungform > form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .ip{
            width: 90%;
        }
        .input{
            border: none;
            padding: 0.6em;
            width: 90%;
        }
        #btn1{
            background-color: #ffb703;
            border: none;
            border-radius: 0.5em;
            padding: 0.6em;
            width: 7em;
            margin-top: 2em;
            font-weight: bold;
        }
        #btn1:hover{
            background-color: #70e000;
        }
        #cover{
            width: 82%;
        }
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1d3557;
  color: white;
}
</style>
<body>
    <?php 
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerAd.php");
    ?>
    <div id="cover">
    <div id="khung1">
        <div id="khungform">
            <form method="post" action="AddBX">
                <div>
                    <h3>THÊM BẾN XE</h3>
                </div>
                <div class="ip">
                    <p>Tên bến xe</p>
                    <input class="input" name="tenben"/>
                </div>
                <div class="ip">
                    <p>Kinh độ</p>
                    <input class="input" name="kdoben" id="kdoben"/>
                </div>
                <div class="ip">
                    <p>Vĩ độ</p>
                    <input class="input" name="vdoben" id="vdoben"/>
                </div>
                <div class="ip">
                    <button id="btn1" type="submit">THÊM</button>
                </div>
            </form>
            <?php 
            ?>
        </div>
        <div id="khungmap">
        <div id="mapid"></div>
        <div>
            *Nhấn vào map để lấy kinh độ vĩ độ chính xác
        </div>
        <div id="distancetravelled"></div>
        </div>
    </div>
    <div>
        <div style="display: flex;justify-content: center;">
            <h3>DANH SÁCH CHI TIẾT BẾN XE</h3>
        </div>
        <div>
            <table id="customers">
                <tr>
                    <th>Mã bến</th>
                    <th>Tên bến</th>
                    <th>Kinh độ bến</th>
                    <th>Vĩ độ bến</th>
                </tr>
                <?php foreach($ben as $b){?>
                    <tr>
                        <td><?php echo $b->maben; ?></td>
                        <td><?php echo $b->tenben; ?></td>
                        <td><?php echo $b->kinhdo; ?></td>
                        <td><?php echo $b->vido; ?></td>
                    </tr>
                <?php }?>

            </table>
        </div>
    </div>
</body>
</html>
<script>
    var map = L.map('mapid').setView([10.762622, 106.660172], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);
var currentMarker;

map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    $('#kdoben').val(lat);
    $('#vdoben').val(lng);
    if (currentMarker) {
        map.removeLayer(currentMarker);
    }
    var marker = L.marker([lat, lng]);
    marker.addTo(map);
    currentMarker = marker;
});

</script>
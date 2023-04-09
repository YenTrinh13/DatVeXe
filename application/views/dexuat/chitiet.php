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
    }
    #mapid {
        height: 50.5em;
        }
        #khungmap{
            width:50%;
            float: left;
            position: fixed;
        }
        #chitiet{
            width: 50%;
            position: absolute;
            z-index: 9999;
            right: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 37.5em;
            /* border: 1px solid #adb5bd; */
            justify-content: center;
        }
        .ct1{
            display: flex;
            justify-content: space-between;
            width: 80%;
        }
        .leaflet-routing-container h3{
            display: none;
        }
        #ctiet{
            width: 70%;
            border: 1px solid #adb5bd;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 1em;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
            
        }
        #btn1 {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
        color: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        }

        #btn1:hover {
        box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
        }
        .ct1>p>svg{
            margin-right: 0.7em;
            width: 18;
            height: 18;
        }
        #man1{
            position: relative;
            z-index: 1;
        }
        #man2{
            display: none;
            background-color: rgba(0, 0, 0, 0.5); 
            height: 92.7vh;
            min-height: auto;
            position: relative;
            z-index: 2;
            align-items: center;
            justify-content: center;
        }
        #xacnhan{
            background-color: white;
            width: 60%;
            height: 25em;
        }
        #an{
            color: red;
            display: none;
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
    <div id="man1">
    <div id="khungmap">
        <div id="mapid"></div>
        <div id="distancetravelled"></div>
    </div>
    <div id="chitiet">
        <div id="ctiet">
        <div style="display:flex; align-items:center; justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4-1v1h1v-1H4Zm1 3v-1H4v1h1Zm7 0v-1h-1v1h1Zm-1-2h1v-1h-1v1Zm-6 3H4v1h1v-1Zm7 1v-1h-1v1h1Zm-7 1H4v1h1v-1Zm7 1v-1h-1v1h1Zm-8 1v1h1v-1H4Zm7 1h1v-1h-1v1Z"/>
            </svg>
            <p style="font-size: 1.2em;">CHI TIẾT VÉ</p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>Xuất phát:</p>
            <p><?php echo $noidi['tenben']; ?></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>Điểm đến:</p>
            <p><?php echo $noiden['tenben']; ?></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>Ngày khởi hành:</p>
            <p><?php echo $chuyenxe['ngayxuatphat']; ?></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
            </svg>Giờ khởi hành:</p>
            <p><?php echo $chuyenxe['gioxuatphat']; ?></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
            <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
            </svg>Độ dài:</p>
            <p id="dodai"></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
            <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
            </svg>Dự kiến thời gian chuyển đi:</p>
            <p id="tgiandk"></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
            </svg>Giá vé:</p>
            <p><?php echo $chuyenxe['gia']; ?></p>
        </div>
        <div class="ct1">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/>
                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                </svg>Số vé còn:</p>
            <p><?php 
            $a1 = $sove;
            $a2 = $socho['socho'];
            $cl = $a2 - $a1;
            echo $cl;
         ?></p>
        </div>
        <div>
            <form method="post"> 
                <button id="btn1" name="btn1" type="submit" > <a id="a1" href="<?php echo site_url('Dat/AddVe'); ?>">Đặt ngay</a></button>
            </form>
        </div>
        <p id="an">* Đã hết vé vui lòng chọn chuyến khác</p>
        </div>
    </div>
</div>
</body>
</html>
<script>
    <?php 
        $a1 = $sove;
        $a2 = $socho['socho'];
        $cl = $a2 - $a1;
    ?>
    var cl = <?php echo $cl?>;
    if(cl == 0){
        $('#a1').removeAttr('href');
        $('#btn1').css('background-color','rgba(0, 0, 0, 0.6)');
        $('#btn1').css('color','black');
        $('#an').css('display','block');
    }
        var mymap = L.map('mapid').setView([10.762622, 106.660172], 13);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(mymap);
        var control = L.Routing.control({
            waypoints: [
                L.latLng(<?php echo $noidi['kinhdo']; ?>, <?php echo $noidi['vido']; ?>),
                L.latLng(<?php echo $noiden['kinhdo']; ?>, <?php echo $noiden['vido']; ?>)
            ],
            routeWhileDragging: true
        }).addTo(mymap);
        control.on('routesfound', function(e) {
        var routes = e.routes;
        var summary = routes[0].summary;
        // console.log('Độ dài: ' + summary.totalDistance + 'm');
        $('#dodai').text(summary.totalDistance + ' '+ 'm');
        $('#tgiandk').text(Math.round(summary.totalTime / 60) + ' '+ 'phút');
        // console.log('Thời gian dự kiến: ' + Math.round(summary.totalTime / 60) + ' phút');
        });
    </script>
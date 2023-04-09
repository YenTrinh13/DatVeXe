<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<style>
    body{
        margin: 0;
        display: flex;
    }
    #fr1{
        width: 50%;
        background-color: #023047;
        padding: 1em;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .div_ip{
        width: 70%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .slc{
        padding: 0.5em;
        width: 15em;
    }
    #btnadd{
        padding: 0.6em;
        width: 8em;
        font-weight: bold;
        margin-top: 1em;
        background-color: #ffb703;
        border: none;
    }
</style>
<body>
    <?php 
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerAd.php");
    ?>
    <div style="width:82%;width: 82%;display: flex;align-items: center;justify-content: center;">
        <form id="fr1" method="post" action="AddCX">
            <h3>THÊM CHUYẾN XE</h3>
                <div class="div_ip">
                    <p>Số xe:</p>
                    <select class="slc" id="soxe" name="soxe">
                    <?php
                    foreach ($xes as $xe) {
                    ?>
                        <option value="<?php echo $xe->soxe ?>"><?php echo $xe->soxe ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="div_ip">
                    <p>Tài xế:</p>
                    <select class="slc" id="taixe" name="taixe">
                    <?php
                    foreach ($taixes as $taixe) {
                    ?>
                        <option value="<?php echo $taixe->matx ?>"><?php echo $taixe->tentx ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="div_ip">
                    <p>Nơi đi:</p>
                    <select class="slc" id="noidi" name="noidi">
                    <?php
                    foreach ($bens as $ben) {
                    ?>
                        <option value="<?php echo $ben->maben ?>"><?php echo $ben->tenben ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="div_ip">
                    <p>Nơi đến:</p>
                    <select class="slc" id="noiden" name="noiden">
                    <?php
                    foreach ($bens as $ben) {
                    ?>
                        <option value="<?php echo $ben->maben ?>"><?php echo $ben->tenben ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="div_ip">
                    <p>Ngày:</p>
                    <input class="slc" type="date" name="ngay"/>
                </div>
                <div class="div_ip">
                    <p>Giờ:</p>
                    <input class="slc" type="time" name="gio"/>
                </div>
                <div class="div_ip">
                    <p>Giá vé:</p>
                    <input class="slc" type="" name="gia"/>
                </div>
                <div class="div_ip">
                    <button id="btnadd" type="submit">THÊM</button>
                </div>
        </form>
    </div>
</body>
</html>
<script>
    // $('#noidi').change(function(){
    //     var giatri = $('#noidi').val();
    //     alert(giatri);
    // })
</script>
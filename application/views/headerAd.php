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
    #khung{
        width: 18%;
        min-height: 100vh;
        height: auto;
        background-image: linear-gradient(160deg,#c5f9d7,#f7d486);
    }
    #tieude{
        display: flex;
        justify-content: center;
        padding: 1em;
    }
    #tieude >p {
        font-size: 1.2em;
        font-weight: bold;
        margin: 0;
    }
    #an,#an2{
        display: none;
    }
    .div1{
        width: 100%;
        padding: 1em;
        display: flex;
    }
    .div1:hover{
        background-color: rgba(255, 255, 255, 0.6); 
    }
    .div1 > p{
        margin: 0;
        width: 80%;
    }
    #up,#up2{
        display: none;
    }
    .a1{
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <div id="khung">
        <div id="tieude">
            <p>ADMIN</p>
        </div>
        <div>
            <div class="div1">
            <a class="a1" href="<?php echo site_url('TongQuan/viewTQ'); ?>">TỔNG QUAN</a>
            </div>
            <div class="div1" id="benxe">
                <p><a class="a1" href="<?php echo site_url('BenXeAd/viewBX'); ?>">QUẢN LÝ BẾN XE</a></p>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" id="down" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="up" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                </svg> -->
            </div>
            <div class="div1" id="chuyenxe">
                <p>CHUYẾN XE</p>
                <svg xmlns="http://www.w3.org/2000/svg" id="down2" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="up2" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                </svg>
            </div>
            <div id="an2">
                <div class="div1">
                    <a class="a1" href="<?php echo site_url('ChuyenXeAd/QLChuyen'); ?>">CHI TIẾT CHUYẾN XE</a>
                </div>
                <div class="div1">
                    <a class="a1" href="<?php echo site_url('ChuyenXeAd/viewCX'); ?>">THÊM CHUYẾN XE</a>
                </div>
            </div>
            <div class="div1">
                <a class="a1" href="<?php echo site_url('AD/view'); ?>">ADMIN</a>
            </div>
            <div class="div1">
                <a class="a1" href="<?php echo site_url('DangXuat/out'); ?>">ĐĂNG XUẤT</a>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z"/>
                </svg> -->
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $('#benxe').click(function(){
        var a = $('#an').css('display');
        if(a == 'block'){
            $('#an').css('display','none');
            $('#down').css('display','block');
            $('#up').css('display','none');
        }
        if(a == 'none'){
            $('#an').css('display','block');
            $('#up').css('display','block');
            $('#down').css('display','none');
        }
    })
    $('#chuyenxe').click(function(){
        var a = $('#an2').css('display');
        if(a == 'block'){
            $('#an2').css('display','none');
            $('#down2').css('display','block');
            $('#up2').css('display','none');
        }
        if(a == 'none'){
            $('#an2').css('display','block');
            $('#up2').css('display','block');
            $('#down2').css('display','none');
        }
    })
</script>
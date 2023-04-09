<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #header{
        height: 3em;
        background-image: linear-gradient(160deg,#c5f9d7,#f7d486);
        display: flex;
    }
    #ic{
        width: 3.3em;
        height: 3.3em;
    }
    #me{
        display: flex;
        width: 90%;
        justify-content: flex-start;
        align-items: center;
    }
    #div_ic{
        width: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .a{
        text-decoration: none;
        color: black;
        font-size: 1.1em;
    }
    #l1{
        height: 100%;
        width: 10em;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #l1:hover{
        background-color: #bbd0ff;
    }
</style>
<body>
    <div id="header">
        <div id="div_ic">
            <img id="ic" src="<?php echo base_url(); ?>images/hinh/Capture-removebg-preview.png"/>
        </div>
        <div id="me">
            <div id="l1">
                <a class="a" href="<?php echo site_url('Helloworld/index'); ?>">TRANG CHỦ</a>
            </div>
            <div id="l1">
                <a class="a" href="<?php echo site_url('DeXuat/dexuat'); ?>">ĐỀ XUẤT</a>
            </div>
            <div id="l1">
                <a class="a" href="">GIỚI THIỆU</a>
            </div>
            <div id="l1">
                <a class="a" href="">HƯỚNG DẪN</a>
            </div>
            <div id="l1">
                <a class="a" href="<?php echo site_url('Login/DangNhap'); ?>">ĐĂNG NHẬP</a>
            </div>
            <div id="l1">
                <a class="a" href="<?php echo site_url('DangKy/Dangky'); ?>">ĐĂNG KÝ</a>
            </div>
        </div>
    </div>
</body>
</html>
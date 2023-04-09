<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
    }
    #w1{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 45%;
        border: 1px solid #ff4d6d;
        padding: 0.5em;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        margin-top: 1em;
    }
    #w1 > p{
        margin: 0.5em;
    }
    #k1{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #w1>svg{
        color: red;
    }
    #k2{
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #thongtin{
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .k3{
        display: flex;
        width: 55%;
        justify-content: space-between;
    }
    #chinh {
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
        margin-top: 1em;
    }

    #chinh:hover {
        box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
    }
</style>
<body>
    <?php
    require_once("C:/xampp/htdocs/HelloPHP/application/views/headerKH.php");
    ?>
    <div id="k1">
        <div id="w1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
            <p>Xin chào tài khoản <?php echo $id;?> !</p>
            <p>Đây là thông tin để đặt vé hoặc xác nhận vé. Bạn vui lòng nhập chính xác thông tin nhé!</p>
            <img id="ic" src="<?php echo base_url(); ?>images/icons8-wink-emoji-68.png"/>
        </div>
        <div id="thongtin">
            <div id="k2">
                <h3>THÔNG TIN CÁ NHÂN</h3>
                    <?php foreach($hs as $i){ ?>
                        <div class="k3" >
                            <p>Họ và Tên:</p>
                            <p><?php echo $i->tenkh;?></p>
                        </div>
                        <div class="k3">
                            <p>Số điện thoại:</p>
                            <p><?php echo $i->sdt;?> </p>
                        </div>
                        <div class="k3">
                            <p>Email:</p>
                            <p><?php echo $i->email;?> </p>
                        </div>
                        <div class="k3">
                            <p>Ngày sinh:</p>
                            <p><?php echo $i->ngaysinh;?> </p>
                        </div>
                        <div class="k3">
                            <p>Địa chỉ:</p>
                            <p><?php echo $i->diachi;?> </p>
                        </div>
                    <?php } ?>
            </div>
            <div>
                <button id="chinh">CHỈNH SỬA THÔNG TIN</button>
            </div>
        </div>
    </div>
</body>
</html>
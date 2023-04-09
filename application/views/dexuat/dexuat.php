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
    }
    #k1{
        padding: 3em;
    }
    #k2{
        border: 1px solid #adb5bd;
        padding: 0.5em;
        width: 21%;
        float: left;
        border-radius: 0.5em;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 5px 15px;
        /* background-color: #ffe5d9; */
        margin-right: 1.5em;
        margin-bottom: 1.5em;
    }
    .p1{
        color: #6c757d;
        width: 3.5em;
    }
    .d1{
        display: flex;
        align-items: center;
    }
    .d1 > p{
        margin-top: 0.7em;
        margin-bottom: 0.7em;
    }
    .btn1{
        border: none;
        background-color: #c1121f;
        padding: 0.4em;
        width: 5em;
        border-radius: 0.5em;
        color: white;
    }
    .btn1:hover{
        background-color: #38b000;
        transition: 0.3s;
    }
    .d2{
        display: flex;
        justify-content: flex-end;
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
    <div id="k1">
        <?php
            foreach ($chuyens as $chuyen) {
        ?>
        <div id="k2">
            <div>
            <svg style="margin-right: 0.5em;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg><span style="font-weight: bold;"><span><?php echo $chuyen->ngayxuatphat ?></span> - <span><?php echo $chuyen->gioxuatphat ?></span></span>
            <hr>
            </div>
            <div>
                <div class="d1">
                    <p class="p1"><svg style="margin-right: 0.2em;color:#219ebc" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                    </svg>Đi</p> 
                    <p><?php echo $chuyen->noidi ?></p>
                </div>
                <div class="d1">
                    <p class="p1"><svg style="margin-right: 0.2em;color:#219ebc" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                    </svg>Đến</p>
                    <p><?php echo $chuyen->noiden ?></p>
                </div>
                <div class="d1">
                    <p class="p1"><svg style="margin-right: 0.2em;color:#80b918" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>Giá</p>
                    <p><?php echo $chuyen->gia ?></p>
                </div>
            </div>
            <div class="d2">
                <button class="btn1">Đặt</button>
                <a class="hien" href="<?php echo site_url('DeXuat/ChiTiet/'.$chuyen->machuyen); ?>" style="font-size: 0.9em;margin-left:0.3em" id="<?php echo $chuyen->machuyen ?>">Xem chi tiết</a>
            </div>
        </div>
        
        <?php
            }
        ?>

    </div>
</body>
</html>
<!-- <script type="text/javascript">
    $('.hien').click(function(){
        var a = $('.hien').attr('id');
    alert(a);
})
</script> -->
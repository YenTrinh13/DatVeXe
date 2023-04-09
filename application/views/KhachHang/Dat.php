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
    #p1{
        width: 30%;
    }
    #p2{
        width: 30%;
    }
    #khung{
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        margin-top: 1em;
        margin-bottom: 1em;
    }
    .k1{
        display: flex;
        width: 100%;
        justify-content: space-between;
    }
    
#btn1 {
    width: 8em;
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

#btn1:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

#btn1:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
#cover{
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 0;
}
#cover2{
    display: none;
    background-color: red;
}
</style>
<body>
<?php
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerKH.php");
    
    ?>
    <div id="cover" >
    <h2>XÁC NHẬN THÔNG TIN</h2>
    
    <div id="khung">
    <?php foreach($thongtin as $i){
        ?>
        <div id="p1">
            <div class="k1">
                <p>Họ tên:</p>
                <p><?php echo $i->tenkh; ?></p>
            </div>
            <div class="k1">
                <p>Số điện thoại: </p>
                <p><?php echo $i->sdt; ?></p>
            </div>
            <div class="k1">
                <p>Email: </p>
                <p><?php echo $i->email; ?></p>
            </div>
            <div class="k1">
                <p>Ngày sinh: </p>
                <p><?php echo $i->ngaysinh ; ?></p>
            </div>
        </div>
        <?php }?>
        <?php foreach($chuyen as $m){ ?>
        <div id="p2">
            <div class="k1">
                <p>Nơi đi:</p>
                <p><?php echo $m->noidi?></p>
            </div>
            <div class="k1">
                <p>Nơi đến:</p>
                <p><?php echo $m->noiden?></p>
            </div>
            <div class="k1">
                <p>Ngày xuất phát:</p>
                <p><?php echo $m->ngayxuatphat?></p>
            </div>
            <div class="k1">
                <p>Giờ xuất phát:</p>
                <p><?php echo $m->gioxuatphat?></p>
            </div>
        </div>
   <?php }?>
   </div>
   <form method="post" action="#">
        <button id="btn1" type="submit">ĐẶT</button>
    </form>
   </div>
   <!-- <div id="cover2">
            sdfsdf
   </div> -->
</body>
</html>
<script>
    // $('#btn1').click(function(){
    //     $('#cover').css('display','none');
    //     $('#cover2').css('display','block');
    // })
</script>
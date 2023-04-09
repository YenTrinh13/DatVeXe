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
  background-color: #04AA6D;
  color: white;
}
.di1{
        width: 20%;
        height: 6em;
        border-radius: 0.7em;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .p{
        font-size: 1.7em;
        font-weight: bold;
        margin: 0;
    }
    #f1{
        display: flex;
        align-items: center;
        width: 45%;
        justify-content: space-evenly;
        background-color: #b2ffa8;
        padding: 0.5em;
    }
    #tk{
        padding: 0.5em;
        width: 50%;
        border: none;
        border-bottom: 1px solid black;
    }
    #khg{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    #btn{
        padding: 0.5em;
        border: none;
        background-color: #ba181b;
        color: white;
        border-radius: 0.5em;
        width: 4em;
    }
</style>
<body>
    <?php 
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerAd.php");
    ?>
    <div style="width:82%">
        <!-- <h3>DANH SÁCH CHUYẾN XE</h3> -->
        <div id="khg">
            <h3>QUẢN LÝ CHUYẾN XE</h3>
            <form id="f1" method="" action="#">
                <p>Nhập mã chuyến:</p>
                <input id="tk" type="text" name="timkiem" />
                <button onclick="laypt();" id="btn" type="submit">Tìm</button>
            </form>
        </div>
        <div id="k4">
        <table id="customers">
            <tr>
                <th>
                    Mã Chuyến
                </th>
                <th>
                    Số xe
                </th>
                <!-- <th>
                    Mã tài xế
                </th> -->
                <th>
                    Nơi đến
                </th>
                <th>
                    Nơi đi
                </th>
                <!-- <th>
                    Ngày xuất phát
                </th>
                <th>
                    Giờ xuất phát
                </th>
                <th>
                    Giá
                </th> -->
                <th>
                    Số vé đã bán
                </th>
                <th>
                    Số vé còn lại
                </th>
            </tr>
            <?php foreach($thongtin as $c){ ?>
            <tr class="my-class" id="<?php echo $c->machuyen; ?>">
                <td class="chuyen_xe"><?php echo $c->machuyen; ?></td>
                <td><?php echo $c->soxe; ?></td>
                <td><?php echo $c->noidi; ?></td>
                <td><?php echo $c->noiden; ?></td>
                <td><?php 
                $tam = 0;
                foreach($t1 as $t){
                    if($t->machuyen == $c->machuyen){
                        
                        echo $t->total;
                        $tam=1;
                    }
                }
                if($tam ==0){
                    echo 0;
                }
                ?></td>
                <td>
                <?php 
                $tam = 0;
                foreach($t1 as $t){
                    if($t->machuyen == $c->machuyen){
                        $a1 = $t->total;
                        // echo $t->total;
                        $tam=1;
                        break;
                    }
                }
                if($tam ==0){
                    $a1=0;
                }
                
                for($i =0; $i < count($cl) ; $i++){
                    if($m2[$i] == $c->soxe){
                        $a2 = $cl[$i];
                        $conlai = $a2 - $a1;
                        if($conlai > -1){
                            echo $conlai;
                        }else{
                            echo '0';
                        }
                        // echo $cl[$i];//socho
                        break;
                    }
                }
            
                ?>
                </td>
                
            </tr>
            <?php }?>
        
        </table>
        </div>
    </div>
</body>
</html>
<script>
    
    function laypt(){
        var ma= document.getElementById('tk').value;
        var elements = document.getElementsByClassName("my-class");
        for (var i = 0; i < elements.length; i++) {
            var firstCell = elements[i].cells[0].innerHTML;
            if(firstCell != ma){
                elements[i].style.display = 'none';
            }
            
    }
}
</script>
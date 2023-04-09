<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<style>
    body{
        margin: 0;
        display: flex;
    }
    #slbenxe{
        background-color: #a7c957;
        padding: 0.5em;
    }
    #slcxe{
        background-color: #e9c46a;
        padding: 0.5em;
    }
    #slxe{
        background-color: #f4a261;
        padding: 0.5em;
    }
    #sltxe{
        background-color: #e76f51;
        padding: 0.5em;
    }
    #cover2{
        display: flex;
        justify-content: space-evenly;
        padding-top: 1em;
    }
    #cover{
        display: flex;
        width: 82%;
        justify-content: flex-start;
        padding-top: 1em;
        flex-direction: column;
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
#k4{
    padding: 1em;
}
</style>
<body>
    <?php 
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerAd.php");
    ?>
    <div id="cover">
        <div id="cover2">
            <div class="di1" id="slbenxe">
                <p> Số bến xe đang hoạt động</p>
                <p class="p"><?php echo $slben; ?></p>
            </div>
            <div class="di1" id="slcxe">
                <p> Số chuyến xe</p>
                <p class="p"><?php echo $slcxe; ?></p>
            </div>
            <div class="di1" id="slxe">
                <p> Số xe hiện có</p>
                <p class="p"><?php echo $slxe; ?></p>
            </div>
            <div class="di1" id="sltxe">
                <p> Số tài xế</p>
                <p class="p"><?php echo $sltxe; ?></p>
            </div>
        </div>
        <div style="display: flex;justify-content: center;margin-top: 2em;flex-direction: column;align-items: center;">
            <canvas id="myChart" style="width:100%;max-width:870px"></canvas>
            <p>Biểu đồ thống kê chuyến xe theo tháng</p>
        </div>
    </div>
</body>
</html>
    <script>
        var x =[];
        <?php for ($i = 0; $i < count($mang); $i++) { ?>
            x.push(<?php echo $mang[$i];?>);
        <?php } ?>
    </script>   
    
<script>
// alert(x);
const xValues = ['T1','T2','T3','T4','T5','T6','T7','T8','T9','T10','T11','T12'];
const yValues = x;

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 0, max:40}}],
    }
  }
});
</script>
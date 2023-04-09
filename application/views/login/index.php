<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/Login/index.css" >
</head>
<body>
  <div id="khung">
    <div id="khunghinh">
      <img src="<?php echo base_url(); ?>images/Login/icons8-user-80.png" alt="">
    </div>
      <div id="fr_DN">
        <form id="Dangnhap" method="post" action="<?php echo site_url('TaiKhoan/dangnhap');?>" >
          <div class="div">
            <img class="img" src="<?php echo base_url(); ?>images/Login/icons8-user-30.png"/>
            <input class="ip" type="text" placeholder="Tên đăng nhập" name="ten_tk"/>
          </div>
          <div class="div">
            <img class="img" src="<?php echo base_url(); ?>images/Login/icons8-password-key-48.png"/>
            <input class="ip" type="password" placeholder="Mật khẩu" name="pass"/>
          </div>
          <button id="btn_dn">ĐĂNG NHẬP</button>
        </form>
      </div>
  </div>
</body>
</html>
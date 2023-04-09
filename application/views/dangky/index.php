<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/DangKy/index.css" >
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
    <div id="body">
        <div id="khung">
            <div id="d1">
                <p>ĐĂNG KÝ</p>
                <hr>
            </div>
            <form action="Add" method="post">
            <div id="khungcot">
                <div>
                    <div class="thongtin">
                        <p>Tên tài khoản</p>
                        <input name="tentk" id="tentk"/>
                    </div>
                    <div class="thongtin">
                        <p>Họ và tên</p>
                        <input name="hoten" id="hoten"/>
                    </div>
                    <div class="thongtin">
                        <p>Số điện thoại</p>
                        <input name="sdt" id="sdt"/>
                    </div>
                    <div class="thongtin">
                        <p>Email</p>
                        <input name="mail" id="mail"/>
                    </div>
                </div>
                <div>
                    <div class="thongtin">
                        <p>Ngày sinh</p>
                        <input type="date" name="ngaysinh" id="ngaysinh"/>
                    </div>
                    <div class="thongtin">
                        <p>Địa chỉ</p>
                        <input name="diachi" id="diachi"/>
                    </div>
                    <div class="thongtin">
                        <p>Mật khẩu</p>
                        <input type="password" name="matkhau" id="matkhau"/>
                    </div>
                    <div class="thongtin">
                        <p>Nhập lại mật khẩu</p> 
                        <input type="password" name="matkhau2" id="matkhau2"/>
                    </div>
                </div>
            </div>
            <div style="    display: flex;
            justify-content: center;
            align-items: center;height: 4em;">
                <button id="dangky" onclick="return KiemTra();" type="submit">ĐĂNG KÝ</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
<script>
    // function KiemTra(){
    //     var flag = true;
    //     var a = $('#matkhau').val();
    //     var b = $('#matkhau2').val();
    //     if( a != b){
    //         alert('sai');
    //         flag = false;
    //     }
    //     return flag;
    // }
    // $('#dangky').click(function(){
    //     var a = $('#matkhau').val();
    //     var b = $('#matkhau2').val();
    //     if( a != b){
    //         alert('sai');
    //     }
    // })
</script>
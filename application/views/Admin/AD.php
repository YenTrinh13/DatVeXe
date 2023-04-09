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
        display: flex;
    }
</style>
<body>
    <?php 
        require_once("C:/xampp/htdocs/HelloPHP/application/views/headerAd.php");
    ?>
    <div>
        <div>
            <form action="" method="post">
                <div>
                    <p>Tên tài khoản Admin:</p>
                    <input />
                </div>
                <div>
                    <p>Mật khẩu:</p>
                    <input type="password"/>
                </div>
                <div>
                    <p>Nhập lại mật khẩu:</p>
                    <input type="password"/>
                </div>
                <div>
                    <button>Thêm</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
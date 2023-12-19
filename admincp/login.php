<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        body {
            background-color: #292931;
            display: block;
            margin: 8px;
        }
        #login {
            position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
        }
        #login h2 {
            text-align: center;
            color: white;
            font-family: sans-senif;
            font-size: 35px;
        }
        h2 {
            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }
        #login input {
            display: block;
            width: 320px;
            height: 40px;
            padding: 10px;
            font-size: 14px;
            font-family: sans-senif;
            color: white;
            background: rgba(0,0,0,0.3);
            outline: none;
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 5px;
            margin-bottom: 10px;
            color: #fff;
        }
        #login #button {
            background: #55acee;
            font-size: 18px;
            text-align: center;
            vertical-align: middle;
            width: 320px;
        }
    </style>
</head>
<body>
    <?php 
    include "config/connect.php";
        if(isset($_POST['dangnhap'])){
            $taikhoan = $_POST['taikhoan'];
            $matkhau = $_POST['matkhau'];
            $sql = "SELECT * FROM taikhoanadmin WHERE TaiKhoan= '$taikhoan' AND MatKhau = '$matkhau'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1){
                $each = mysqli_fetch_array($result);
                session_start();
                $_SESSION['id'] = $each['MaTKAdmin'];
                $_SESSION['name'] = $each['TaiKhoan'];
                $_SESSION['level'] = $each['LoaiTK'];
                header('Location:index.php');
            }
        }
    ?>
    <div id="login">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <h2>Đăng nhập</h2>
        <input type="text" name="taikhoan" placeholder="Nhập tài khoản . . ." required="required" />
        <input type="password" name="matkhau" maxlength="20" placeholder="Nhập mật khẩu . . ." required="required" />
        <input style=" margin: auto; margin-top: 13px; " type="submit" name="dangnhap" value="Đăng nhập"/>
    </form>

</div>
</body>
</html>
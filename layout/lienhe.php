<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Zanado
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <style type="text/css">
        #gioithieu-ch{padding-top: 15px;padding-bottom: 15px}
        #gioithieu-ch .content-gt{margin-top: 20px;font-family: Raleway;color: #444}
        #gioithieu-ch .title{font-weight: 700;  font-size: 20px;border-bottom: 1px dashed #cccccc;padding-bottom: 5px}
        .results {
            color: #009966;
        }
        .results1 {
            color: #FF0000;
        }
    </style>
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
    ?>
</head>
<body style="margin-top: -20px;overflow-x: hidden;">
    <?php
        if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$sdt = $_POST['sdt'];
            $content = $_POST['content'];
            if(trim($name) == null || trim($email) == null || trim($sdt) == null || trim($content) == null)
                $message = "<p class='results1'>Các trường dữ liệu không được bỏ trống!</p>";
			else {
                $query ="INSERT INTO lienhe(Ten,Email,SoDienThoai, NoiDung) VALUES('{$name}','{$email}', '{$sdt}',  '{$content}')";
                $result = mysqli_query($conn,$query);
                $message = "<p class='results'>Gửi liên hệ thành công!</p>";
            }
		}
    ?>
    <?php include "head.php" ?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Liên hệ</li>

        </ul>
    </div>
    <div class="tt-lienhe">
            <br>
            <div class="title text-center"><h3>GỬI LIÊN HỆ VỀ SHOP</h3></div>
                <form action="" method="post" >
                    <?php
                    if (isset($message)) {
                        echo $message;
                    } ?>
                    <div class="wapper-lh">
                        <div class="col-xs-12 col-sm-6">
                            <div class="wrapper-name">
                                <input type="text" name="name" placeholder="Nhập họ tên" class="form-control" value="<?php if (isset($_POST['name'])) echo $_POST['name'];?>">
                                <div class="errors" style="opacity: 0">...</div>
                                <span class='icon-notify' style='right: 5px'></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="wrapper-email">
                                <input type="text" name="email" placeholder="Email của bạn" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>">
                                <div class="errors" style="opacity: 0">...</div>
                                <span class='icon-notify' style='right: 5px'></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="wrapper-sdt">
                                <input type="text" name="sdt" placeholder="Điện thoại" class="form-control" value="<?php if (isset($_POST['sdt'])) echo $_POST['sdt'];?>">
                                <div class="errors" style="opacity: 0">...</div>
                                <span class='icon-notify' style='right: 5px'></span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="wrapper-content">
                                <textarea name="content" placeholder="Nội dung liên hệ" class="form-control" rows="6"><?php if (isset($_POST['content'])) echo $_POST['content'];?></textarea>
                                <div class="errors" style="opacity: 0">...</div>
                                <span class='icon-notify' style='right: 5px'></span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="submit" value="GỬI LIÊN HỆ" class="btn btn-success" onClick="return confirm('Bạn thật sự muốn gửi không ?');">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
   <?php include "foot.php"?>
</body>
</html>
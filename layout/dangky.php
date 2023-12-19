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
</head>

<body>
<?php include "head.php" ?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;"> Đăng ký </li>

        </ul>

    </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <h2 class="sec-content-heading text-center">ĐĂNG KÝ</h2>
    <p class="sec-slogan text-center">Dùng email để đăng ký tài khoản</p>
    <div class="row contact-form">
        <div class="col half-col contact-infor">
        <img src="../asset/images/out.jpg" style="background-size: contain; height: 40%; ">
        </div>
        <div class="col half-col contact-form-personal" style="background-color: #f8f8f8; text-align: center;">
            <form action="../Back-enddevelopment/dangky.php" method="post">
                <div class="row">
                    <div class="col half-col contact-input" style="margin-top: 50px;">
                        <input type="text" placeholder="Name" name="tentaikhoan" id="" class="form-cotrol text-center">
                    </div>


                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="col half-col contact-input" style="margin-top: 5px;">
                        <input type="email" placeholder="Email" name="email" id="" class="form-cotrol text-center">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="col full-col contact-input mt-8" style="margin-top: 10px;">
                        <input type="password" placeholder="Mật khẩu" name="pass" id="password" class="form-cotrol text-center" required>

                    </div>
                   <!-- <div class="col full-col contact-input mt-8" style="margin-top: 10px;">
                        <input type="password" placeholder="Xác minh mật khẩu" name="repass" id="" class="form-cotrol text-center" required oninput="check(this)">

                    </div>
            -->
                </div>
                <input class="button pull-right-dangnhap " style=" background-color: #000;" name="enter" type="submit" value="ĐĂNG KÝ">
            </form>

        </div>
    </div>


    <?php include "foot.php" ?>
</body>


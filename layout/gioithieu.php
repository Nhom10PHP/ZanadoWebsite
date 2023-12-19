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
    </style>
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
    ?>
</head>
<body style="margin-top: -20px;overflow-x: hidden;">
    <?php include "head.php" ?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Giới thiệu</li>

        </ul>
    </div>
    <div class="container" id="gioithieu-ch">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="title">Giới thiệu về Zanado</h3>
                <?php
                $query = "SELECT * FROM thongtin WHERE TenThongTin ='gioithieu'";
                $result = mysqli_query($conn, $query);
                if ( mysqli_num_rows($result) > 0 ) {
                    extract( mysqli_fetch_array($result) );
                    echo $NoiDung;
                }  else {
                    ?>
                    <div class="content-gt">Chưa có.</div>
                    <?php 
                }
                ?>
            </div>
        </div>
    </div>
   <?php include "foot.php"?>
</body>
</html>
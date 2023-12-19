<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Zanado
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <style>
    img {
        width: 100%;
        height: 80%;

    }

    td,
    th {
        width: 10%;
        height: 20%;
        border: 1px solid #000;
    }
  
    </style>
</head>

<body>
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
        $sql = "SELECT * FROM thongtin"; 
        $query= mysqli_query($conn , $sql);

    ?>
    <?php include "head.php" ?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trang_chu.html">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Thông tin</li>

        </ul>

    </div>
    <div class="test"> </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <h2 class="sec-content-heading text-center">THÔNG TIN VỀ CHÚNG TÔI</h2>
    <div class="list-infor">

        <table style="width:100%; text-align:center;">
            <?php  
                  while($row=mysqli_fetch_assoc($query)) {
               ?>
            <div class="tieude">
                <h2> <?php echo $row['TenBai'] ?> </h2>
            </div>
            <div class="chitiet">
                <p>
                    <?php  echo  $row['ChiTietBai'] ?>
                </p>
            </div>
          
                <h3>Hình ảnh liên quan</h3>
                    <div class="imagethongtin" style="width: 100%;">
                        <img src="../asset/images/<?php  echo $row['Anh'] ?>" >
                  </div>
            <?php  
                  }
                ?>

        </table>


    </div>
    <?php include "foot.php"   ?>
</body>
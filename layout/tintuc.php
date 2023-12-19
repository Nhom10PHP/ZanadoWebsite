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
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
        $sql = "SELECT * FROM tintuc"; 
      
        $query= mysqli_query($conn , $sql);

    ?>
</head>

<body>
<?php include "head.php" ?>

    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Tin tức</li>

        </ul>

    </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <h2 class="sec-content-heading text-center">TIN TỨC</h2>
    <div class="tintuc" style=" height: 100%; width: 100%; text-align: center;">
        <?php 
                               
                                while($row=mysqli_fetch_assoc($query)) {  

        ?>
        <div class="detail-tintuc">
            <div class="img-detail-tintuc">
                <img src="../asset/images/<?php echo $row['AnhTT'];?>" alt="">

            </div>
            <div class="descri-detail-tintuc">
                <h4 style="text-align: center; margin-top: 10px;"> <?php echo $row['TenTT'] ;?></h4>
                <p>
                   <?php echo $row['NoiDung']   ?>
                </p>
            </div>
        </div>
        <?php }   ?>
    </div>



<?php include "foot.php"   ?>

</body>

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
        $sql = "SELECT * FROM sanpham INNER JOIN theloai ON sanpham.MaTheLoai=theloai.MaTheLoai WHERE TenTL='Quần đẹp'"; 
        $query= mysqli_query($conn , $sql);

    ?>
</head>

<body>
<?php include "head.php" ?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;"> Quần đẹp </li>

        </ul>

    </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <article>
        <div class="hot-product" style="background-color:burlywood; padding:1px">
            <div class="title text-center font-weight-bold" style="margin-top: 100px; margin-bottom: 30px;">
                <h1>QUẦN ĐẸP</h1>
            </div>
            <p style="font-size:19px; max-width: 800px; margin: auto; margin-bottom: 60px; font-style: italic;" class="text-center">
                Tạo nên phong cách lịch lãm của bạn !!!
            </p>
            <div class="list-product">
            <?php 
                               
                                while($row=mysqli_fetch_assoc($query)) {  

                              ?> 
                    <div class="product col-10 col-sm-5 col-xl-2 text-center">
                    <div class="image" style="width: 100%;">
                        <img src="../asset/images/<?php  echo $row['AnhSanPham'] ?>" width="100%" height="100%">
                    </div>
                    <div class="infor">
                        <p class="name">
                            <?php echo $row['TenSanPham']?>
                        </p>
                        <p class="star">
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                        </p>
                        <p class="price">
                            <span><span style="text-decoration: line-through;"></span>&nbsp&nbsp&nbsp&nbsp <?php echo $row['Gia']?> VND</span>
                        </p>
                        <button><a href="../layout/chitietsanpham.php ?MaSP=<?php echo $row['MaSP'];?>">Mua ngay</a></button>
                    </div>
                </div>
                
                <?php }   ?>

            </div>
        </div>


    </article>


    <?php include "foot.php" ?>
</body>

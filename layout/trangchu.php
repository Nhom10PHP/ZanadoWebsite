<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Zanado
    </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <?php  
     session_start(); 
    ?>
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
        $sql = "SELECT * FROM sanpham"; 
        $query= mysqli_query($conn , $sql);
        $sql_danhmuc = "SELECT * FROM danhmuc";
        $query_danhmuc =mysqli_query($conn,$sql_danhmuc);
        
    ?>
</head>

<body>
<?php include 'head.php'?>
    <div class="Banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="max-height: 520px;">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../asset/images/slider_3s.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../asset/images/slider_2ss.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../asset/images/slider_1s.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="bottom">

    </div>
    <div class="bottom-banner">
        <div style="background-image: url('../asset/images/section_hotss.jpg');" class="flash-news text-center col-11 col-sm-11 col-xl-5">
            
            <button style="margin-top:60px"><a href="danhmuc.php?MaDM=1">Khám phá</a></button>
        </div>
        <div style="background-image: url('../asset/images/section3s.jpg');" class="flash-shop text-center col-11 col-sm-11 col-xl-5">
            <button style="margin-top:60px;"><a href="danhmuc.php?MaDM=2">Khám phá</a></button>
        </div>
    </div>
    <article>
        <div class="hot-product" style="background-color :#ccc;padding:1px">
            <div class="title text-center font-weight-bold" style="margin-top: 100px; margin-bottom: 30px;">
                <h1>SẢN PHẨM MỚI NHẤT</h1>
            </div>
            <p style="font-size:19px; max-width: 800px; margin: auto; margin-bottom: 60px; font-style: italic;" class="text-center">
                Sản phẩm mới nhất trên Zanado!!
            </p>
            
            <div class="list-product">
            <?php 
                               
                                while($row=mysqli_fetch_assoc($query)) {  

             ?> 
                    <div class="product col-10 col-sm-5 col-xl-2 text-center">
                    <div class="image" style="width: 100%;">
                        <img src="../asset/images/<?php echo $row['AnhSanPham'] ?>" width="100%" height="100%">
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

        <?php 
        
        while($rowdm = mysqli_fetch_assoc($query_danhmuc)) {
        ?>
        <div class="hot-product" style="border : 10px solid #ccc;margin-bottom:20px;border-radius:10px;">
            <div class="title text-center font-weight-bold" style="margin-top: 100px; margin-bottom: 30px;">
            
            <h1> <?php  echo $rowdm['TenDM']  ?></h1>
            
            </div>
            <p style="font-size:19px; max-width: 800px; margin: auto; margin-bottom: 60px; font-style: italic;" class="text-center">
                <?php echo $rowdm['MoTaDM']?>
            </p>
            
            <div class="list-product">
            <?php 
            $tendm = $rowdm['TenDM']; 
            $sql_sanphamtheodm = "SELECT * FROM danhmuc INNER JOIN sanpham ON danhmuc.MaDM = sanpham.MaDM WHERE TenDM='$tendm'";
            $query_sanphamtheodm =mysqli_query($conn,$sql_sanphamtheodm);     
             while($rowsptdm=mysqli_fetch_assoc($query_sanphamtheodm)){
            ?> 
                    
                    <div class="product col-10 col-sm-5 col-xl-2 text-center">
                    <div class="image" style="width: 100%;">
                        <img src="../asset/images/<?php  echo $rowsptdm['AnhSanPham'] ?>" width="100%" height="100%">
                    </div>
                    <div class="infor">
                        <p class="name">
                            <?php echo $rowsptdm['TenSanPham']?>
                        </p>
                        <p class="star">
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                            <a href="#"><img src="../asset/images/star.jpg"></a>
                        </p>
                        <p class="price">
                            <span><span style="text-decoration: line-through;"></span>&nbsp&nbsp&nbsp&nbsp <?php echo $rowsptdm['Gia']?> VND</ span>
                        </p>
                        <button><a href="../layout/chitietsanpham.php ?MaSP=<?php echo $rowsptdm['MaSP'];?>">Mua ngay</a></button>
                    </div>
                </div>
                
                
                <?php } ?>
            </div>
               
             
               
        </div>

        <?php  } ?>
        <div class="bgimg1" style="background-image: url(../asset/images/thesaless.jpg);" ></div>
        <div class="blog mb-5">
            
        </div>
        <!--New function : Sản phẩm demo-->
        <?php include 'demo_trangchu.php'  ?>
    </article>
 
   <?php include "foot.php"?>
</body>

</html>
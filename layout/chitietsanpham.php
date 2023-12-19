<?php 
  session_start(); 
?>
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
    <?php   
      
        include "../Back-enddevelopment/connect.php" ;
        $id = $_GET['MaSP'];
        $sql_of_chitiet = "SELECT * FROM sanpham WHERE MaSP LIKE '$id'"; 
        $query_of_chitiet= mysqli_query($conn , $sql_of_chitiet);

       

    ?>

    <?php include "head.php" ?>
    <?php 
                                
                                while($row=mysqli_fetch_assoc($query_of_chitiet)) {  

?>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;"><?php echo $ten=$row['TenSanPham']?> </li>

        </ul>

    </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>

    <form action="" method="post">
        <div class="detail-buy">
            <div class="img-detail-buy">
                <img src="../asset/images/<?php echo $image=$row['AnhSanPham']  ?>" width="100%" height="100%">
            </div>
            <div class="content-detail-buy">
                <p class="name-product">

                    <?php echo $ten ?>
                </p>
                <div class="group-status">
                    <span class="status1">Thương hiệu : <a href="">Zanado</a></span>
                    <span>&nbsp;|&nbsp;</span>
                    <span class="status2">Tình trạng : <a href=""><?php echo $row['TinhTrang'] ?></a> </span>
                </div>


                <div class="detail-price">

                    <p style="color: red; "><?php echo $gia=$row['Gia'];?> VNĐ</p>
                </div>
                <div class="size">
                    <div class="header-size">Kích thước </div>
                    <div class="detail-size">
                        <p> size S <input type="radio" id="S" name="option" value="S"> </p>
                        <span>&nbsp;|&nbsp;</span>
                        <p> size L <input type="radio" id="L" name="option" value="L"> </p>
                        <span>&nbsp;|&nbsp;</span>
                        <p> size XL <input type="radio" id="XL" name="option" value="XL"> </p>
                        <span>&nbsp;|&nbsp;</span>
                        <p> size XXL <input type="radio" id="XXL" name="option" value="XXL"> </p>

                    </div>

                </div>
                <div class="color">
                    <div class="header-color">Màu sắc </div>
                    <div class="detail-color">
                        <p> Xanh <input type="radio" value="Màu xanh" name="option-ms"> </p>
                        <span>&nbsp;|&nbsp;</span>
                        <p> Trắng <input type="radio" value="Màu trắng" name="option-ms"> </p>
                        <span>&nbsp;|&nbsp;</span>
                        <p> Đen <input type="radio" value="Màu đen" name="option-ms"> </p>


                    </div>

                </div>
                <div class="quality">
                    <div class="header-quality">Số lượng </div>
                    <div class="detail-quality">
                        <input type="number" name="number" value="">


                    </div>

                </div>
                <div class="AddCart">
                    <input class="button pull-right-dangnhap " style=" background-color: #000;" name="enter"
                        type="submit"  value="Thêm vào giỏ hàng">
                </div>


            </div>
            <div class="chiem"></div>
        </div>


    </form>
    <?php }   ?>
    <div class="comment">
        <div class="detail-comment">
            <h1>Mô tả sản phẩm</h1>
            <p style="font-weight: 550; font-size: 25px;">Chi tiết sản phẩm</p>
            <ul>
                <li>Sản phẩm 100% cotton - định lượng 200-210gsm.</li>
                <li>Form áo, quần cơ bản.</li>
                <li>Hình và màu sắc được in với công nghệ in kỹ thuật số.</li>
            </ul>
            <p style="font-weight: 550; font-size: 25px;">Quy định về đổi sản phẩm</p>
            <ul>
                <li>Chỉ được đổi sản phẩm duy nhất một lần.</li>
                <li>Thời hạn đổi sản phẩm là 7 ngày, kể từ khi nhận hàng.</li>
                <li>Sản phẩm đổi phải kèm nguyên hộp, nhãn mác.</li>
                <li>Sản phẩm đổi không có dấu hiệu đã qua sử dụng, không giặt tẩy, bám bẩn, biến dạng.</li>
            </ul>
        </div>
        <div class="product-near">
            <div style="background-color: #17a2b8; color: #fff; height: 40px; "> Có thể bạn quan tâm</div>
        </div>

    </div>

    <?php include "foot.php"   ?>
    <?php  
       include "../Back-enddevelopment/connect.php" ; 
       if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = []; 
       if(isset($_POST['enter'])){
       
       $soluong = $_POST['number']; 
       $size  = $_POST['option'];
       $ms=$_POST['option-ms'];
       $tongtien=$soluong*$gia; 
       $sp = [$image,$ten,$gia,$size,$ms,$soluong,$id]; 
       $_SESSION['giohang'][] = $sp; 
       if(isset($_SESSION['giohang'])) {
        echo '<script>alert("Thêm giỏ hàng thành công !");</script>';
       } 
        
       
          
           
      }

    ?>
</body>
<head>
    <title>
    Zanado
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <?php 
        include "../Back-enddevelopment/connect.php" ; 
    
    ?>
</head>

<body>
    <?php include "head.php" ?>

    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trangchu.php">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Tìm kiếm</li>

        </ul>

    </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <h2 class="sec-content-heading text-center">KẾT QUẢ TÌM KIẾM</h2>
    <?php
     if (isset($_POST['timkiem'])) {
	 $tukhoa = $_POST['txttukhoa'];
    
     $sql_pro = "SELECT * FROM sanpham WHERE TenSanPham LIKE '%$tukhoa%'";
     $query_pro = mysqli_query($conn, $sql_pro);
     $sql_dm = "SELECT * FROM danhmuc WHERE TenDM LIKE '%$tukhoa%'";
     $query_dm = mysqli_query($conn, $sql_dm);

    ?>
    <style>
    h3 {
        text-align: center;
        font-size: 26px;
    }
    .product_list{
         text-align:center; 
         list-style:none; 
    }
    .danhmuc{
         background-color: #ccc;
         height:100px;
         border:1px solid #000;
    }
    </style>
    <h3>-Từ khoá tìm kiếm : <?php echo $tukhoa ?> -</h3>
    <div class="danhmuc">
    <ul class="product_list" >
        <?php
	while ($row = mysqli_fetch_array($query_pro)) {
	?>
        <li>
            <a href="chitietsanpham.php?MaSP=<?php echo $row['MaSP']?>"><?php echo $row['TenSanPham'];?> </a>
        </li>
        <?php
	}
	?> 
     <?php
	while ($rowdm = mysqli_fetch_array($query_dm)) {
	?>
        <li>
            <a href="danhmuc.php?MaDM=<?php echo $rowdm['MaDM']?>"><?php echo $rowdm['TenDM'];?> </a>
        </li>
        <?php
	}
	?> 
    </ul>

    <?php  } ?>
    </div>
    <?php include "foot.php"   ?>

</body>
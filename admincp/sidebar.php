<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('config/connect.php'); ?>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style_admincp.css">
    <link rel="stylesheet" href="./css/sb-admin.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<style>
  .thongbao{
    background: #d54e21;
    width: 20px;
    height: 20px;
    text-align: center;
    color: white;
    display: inline-block;
    border-radius: 50%;
    font-size: 11px;
    line-height: 20px;
  }

  
</style>
</head>
<body>
<div class="collapse navbar-collapse navbar-ex1-collapse wrap-sidebar">
    <ul class="nav navbar-nav side-nav">
        <li style="color:#fff;">
          <a href="index.php" style="color:#fff;"><img src="../asset/images/logoss.jpg" width="100%"></a>
        </li>
        <li class="li-first">
            <a href="index.php" style="color:#fff;"><i class="fa fa-fw fa-home"></i>Trang chủ</a>
        </li>

        <li class="li-first danh-muc">
        <a href="javascript:;" data-toggle="collapse" data-target="#menu"><i class="fa fa-fw fa-tags"></i>
            <span class="text">Danh mục</span> <i class="fa fa-fw fa-caret-down"></i>
        </a>
        <ul id="menu" class="collapse">
            <li class="loaisanpham">
                <a href="quanlydanhmuc.php"><i class="fa fa-fw fa-circle"></i>Quản lý danh mục</a>
            </li>
            <li class="sanpham">
                <a href="quanlysanpham.php"><i class="fa fa-fw fa-circle"></i> Quản lý sản phẩm</a>
            </li>
        </ul>
    </li>

    <li class="li-first kinh-doanh">
        <a href="javascript:;" data-toggle="collapse" data-target="#sales"><i class="fa fa-fw fa-briefcase"></i>
            Kinh doanh <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="sales" class="collapse">
            <li class="donhang">
                <a href="danhsachdonhang.php"><i class="fa fa-fw fa-circle"></i> Đơn hàng</a>
            </li>
        </ul>
    </li>

    <li class="li-first quang-cao">
    <a href="javascript:;" data-toggle="collapse" data-target="#demo_qc"><i class="fa fa-fw fa-bullhorn"></i>
        Quảng cáo <i class="fa fa-fw fa-caret-down"></i>
    </a>
    <ul id="demo_qc" class="collapse">
        <li class="tintuc">
        <a href="danhsachtintuc.php"><i class="fa fa-fw fa-circle"></i>Tin tức</a>
        </li>
        <li class="gioithieu">
        <a href="quanlygioithieu.php"><i class="fa fa-fw fa-circle"></i>Giới thiệu</a>
        </li>
    </ul>
    </li>

    <li class="li-first tinh-thanh">
        <a href="javascript:;" data-toggle="collapse" data-target="#tinhthanh"><i class="fa fa-fw fa-globe" aria-hidden="true"></i>
        Tỉnh thành<i class="fa fa-fw fa-caret-down"></i>
        </a>
        <ul id="tinhthanh" class="collapse">
            <li class="thanhpho">
                <a href="danhsachtinh.php"><i class="fa fa-fw fa-circle" aria-hidden="true"></i>Thành phố</a>
            </li>
            <li class="quanhuyen">
                <a href="danhsachhuyen.php"><i class="fa fa-fw fa-circle" aria-hidden="true"></i> Quận huyện</a>
            </li>
        
        </ul>
    </li>
    <li class="li-first lien-he">
        <a href="javascript:;" data-toggle="collapse" data-target="#customer"><i class="fa fa-fw fa-phone"></i> Liên hệ
            <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="customer" class="collapse">
                <li class="thongtin">
                    <a href="danhsachlienhe.php"><i class="fa fa-fw fa-circle"></i> Thông tin</a>
                </li>
            </ul>
    </li>
    
    <?php 
    if ( $_SESSION['level'] == 0 ) {

     ?>
     <li class="tai-khoan">
        <a href="javascript:;" data-toggle="collapse" data-target="#demo_user"><i class="fa fa-fw fa-users"></i> Tài khoản
            <i class="fa fa-fw fa-caret-down"></i>
        </a>
        <ul id="demo_user" class="collapse">
            <li class="nguoidung">
                <a href="danhsachtaikhoan.php"><i class="fa fa-fw fa-circle"></i> Danh sách</a>
            </li>
        </ul>
    </li>
    <?php
}
?>

<?php 
if ( $_SESSION['level'] == 0 ) {

 ?>
 <li class="li-first thong-tin-trang">
    <a href="javascript:;" data-toggle="collapse" data-target="#demo_information"><i class="fa fa-fw fa-info"></i> Thông tin website
        <i class="fa fa-fw fa-caret-down"></i>
    </a>
    <ul id="demo_information" class="collapse">
        <li class="thongtintrang">
            <a href="danhsachthongtin.php"><i class="fa fa-fw fa-circle"></i> Chỉnh sửa</a>
        </li>
    </ul>
</li>
<?php
}
?>
</ul>

</div>
<!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
</body>
</html>


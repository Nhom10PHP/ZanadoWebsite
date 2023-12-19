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
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <link rel="stylesheet" href="../asset/font/themify-icons/themify-icons.css">
    <style>
    .detail-giohang img {
        width: 65%;
        height: 70px;

    }


    th {
        width: 10%;
        height: 20%;

    }

    td {
        font-size: 15px;
        font-family: 'Times New Roman';
    }
    </style>
    <?php 
     session_start();
    ?>
</head>

<body>
    <?php  include "../Back-enddevelopment/connect.php";?>
    <?php include 'head.php'  ?>
    <?php 
       
     
        $sql_quanhuyen = "SELECT * FROM huyen INNER JOIN tinhthanh ON huyen.MaTinhThanh=tinhthanh.MaTinhThanh"; 
        $query_quanhuyen = mysqli_query($conn,$sql_quanhuyen); 
        if(isset($_GET['delecartall']) && ($_GET['delecartall'] == 1)) unset($_SESSION['giohang']);
        if(isset($_GET['delete']) && ($_GET['delete'] >= 0)) {
            array_splice( $_SESSION['giohang'], $_GET['delete'],1); 
        }; 
        function showdatagiohang(){ 
            
            if(isset( $_SESSION['giohang']) && (is_array( $_SESSION['giohang']))){
                for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
                    
                     echo '
                     <tr>
                        <td> <img src = "../asset/images/'.$_SESSION['giohang'][$i][0].'"></td>

                        <td> '.$_SESSION['giohang'][$i][1].'  </td>
                        <td>'.$_SESSION['giohang'][$i][2].'  </td>
                        <td>'.$_SESSION['giohang'][$i][3].' </td>
                        <td>'.$_SESSION['giohang'][$i][4].' </td>
                        <td>'.$_SESSION['giohang'][$i][5].' </td>

                        <td>   <a href = "giohang.php?delete='.$i.'"><i class="ti-trash"></i></a></td>
                        

                    </tr>  '  ; 
                }
            }
            
        }
        function showdatadonhang(){
            if(isset( $_SESSION['giohang']) && (is_array( $_SESSION['giohang']))){
                $tong = 0; 
                for($i=0; $i < sizeof($_SESSION['giohang']); $i++){

                    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][5];
                    $tong += $tt;  
                     echo '
                     <tr>
                      

                        <td> '.$_SESSION['giohang'][$i][1].'  </td>
                        <td>'.$_SESSION['giohang'][$i][5].' </td>

                        <td> '.$tt.' </td>
                       

                    </tr>'  ; 
                }
            }
            
        } 
        function showtonghoadon(){
            if(isset( $_SESSION['giohang']) && (is_array( $_SESSION['giohang']))){
                $tong = 0; 
                for($i=0; $i < sizeof($_SESSION['giohang']); $i++){

                    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][5];
                    $tong += $tt;  
                     
                }
                echo '
                         <p> '.$tong.' VNĐ</p>
                      ' ; 
            }
            
        }
    ?>
    <script>
    function exeAdd() {
        <?php   
                   if (isset($_POST['dat'])) {
                    if(!isset($_SESSION['khachhang'])) $_SESSION['khachhang'] = []; 
                    $hoten = $_POST['name']; 
                    $email = $_POST['email'];
                    $sdt = $_POST['phone_number'];
                   
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date("Y-m-d h:i:sa"); 
                    $diachi = $_POST['diachi']; 
                    $quanhuyen = $_POST['quanhuyen'];
                    $kh = [$hoten,$email,$sdt,$diachi,$tinhthanh]; 
                    $_SESSION['khachhang'] = $kh;
                    $ppvc = $_POST['vanchuyen']; 
                    if(isset( $_SESSION['giohang']) && (is_array( $_SESSION['giohang']))) {
                       for($i=0; $i < sizeof($_SESSION['giohang']); $i++) {
                           $masp =$_SESSION['giohang'][$i][6];
                           $sl =$_SESSION['giohang'][$i][5];
                           $kt = $_SESSION['giohang'][$i][3];
                           $sql = "INSERT INTO donhang(MaSP,KichThuoc,SoLuong,HoTen,SoDienThoai,Email,NgayDat,DiaChi,PhuongThucVanChuyen,TinhTrang,MaHuyen)
                           VALUE ('$masp','$kt','$sl','$hoten','$sdt','$email','$date','$diachi','$ppvc',0,'$quanhuyen')" ; 
                           if($conn -> query($sql)) {
                            echo '<script>alert("Mua hàng thành công !");</script>';
    }
    }
    }

    }
    ?>

    }
    </script>
    <div class="header-bottom">
        <ul class="menu-header-bottom">
            <li><a href="./trang_chu.html">Trang chủ<span>&nbsp;/&nbsp;</span></a></li>

            <li style="color:#999 ;">Giỏ hàng</li>

        </ul>

    </div>
    <div class="test"> </div>
    <div style="background-color: #f8f8f8; height: 20px;"></div>
    <div class="card-list">
        <h2 class="sec-content-heading text-center"><i class="ti-shopping-cart">  GIỎ HÀNG</i></h2>
        <div class="detail-giohang">
            <table style="width:100%; text-align:center;">
                <thead>
                    <tr>
                        <th>Ảnh </th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>

                        <th>Kích thước</th>
                        <th>Màu sắc</th>
                        <th>Số lượng</th>
                        <th> Xóa</th>



                    </tr>

                </thead>
                <tbody>

                    <?php  
                             showdatagiohang(); 
                          ?>
                </tbody>


            </table>
            <div class="button-deleteall">
                <a href="giohang.php?delecartall=1"><button> <i class="ti-trash"></i> Xóa tất cả</button> </a>
            </div>
        </div>
        <hr>
        <div class="thongtin">
            <form method="post">

                <div class="container">

                    <div class="thongtinkh">
                        <div class="lienhe">
                            <h3>Thông tin liên hệ</h3>
                            <hr>
                            <div class="form-group height">
                                <div class="">
                                    <label class="">Họ và tên *</label>
                                </div>
                                <div class="">
                                    <input type="text" name="name" required name=" " class="form-control">


                                </div>
                            </div>
                            <div class="form-group height">
                                <div class=""><label class="name">Email</label></div>
                                <div class="">
                                    <input type="text" name="email" required name=" " class="form-control">


                                </div>
                            </div>
                            <div class="form-group height">
                                <div class=""><label class="name">Số điện thoại *</label>
                                </div>
                                <div class="">
                                    <input type="text" name="phone_number" required name=" " class="form-control">


                                </div>
                            </div>
                        </div>
                        <div class="diachi">

                            <h3>Địa chỉ giao hàng</h3>
                            <div class="">
                                <label class="name">Nhập số nhà,đường*</label>
                            </div>
                            <div class="">
                                <input type="text" name="diachi" required name=" " class="form-control">


                            </div>
                            <hr>
                            <div class="form-group height">
                                <div class=""><label class="name">Chọn quận, huyện , tỉnh *</label>
                                </div>
                                <div class="chonquanhuyen">

                                    <select name="quanhuyen" class="select quanhuyen">
                                        <?php 
                                       while($row_quanhuyen = mysqli_fetch_assoc($query_quanhuyen)) {
                                    ?>
                                        <option value="<?php echo $row_quanhuyen['MaHuyen']?>">
                                            <?php echo $row_quanhuyen['TenHuyen'] ?> - <?php echo $row_quanhuyen['TenTinhThanh']  ?> </option>
                                        <?php } ?>
                                    </select>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="detail-hoadon">

                        <h4>Đơn hàng của bạn</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th> Sản phẩm </th>
                                    <th> Số lượng </th>
                                    <th> Tổng tiền</th>
                                </tr>
                            </thead>
                            <hr>
                            <tbody>
                                <hr>
                                <?php showdatadonhang() ?>
                            </tbody>
                        </table>
                        <hr>

                        <div class="pt-vanchuyen">
                            <h6>Phương thức vận chuyển (Nhấn để chọn)</h6>
                            <hr>
                            <input type="radio" name="vanchuyen" id="" value="QT" checked>
                            <label for="">Vận chuyển nhanh quốc tế</label>
                            <input type="radio" name="vanchuyen" id="" value="BD">
                            <label for="">Vận chuyển qua bưu điện </label>

                        </div>
                        <hr>
                        <div class="xacnhan">
                            <div class="tongtt">
                                <p>Tổng thanh toán</p>
                                <div class="tong"> <?php showtonghoadon() ?> </div>
                            </div>
                            <div class="button-dat">
                                <input onClick="return confirm('Bạn có chắn chắn mua hàng không?');" type="submit" value="Đặt hàng" name="dat" onclick="exeAdd()">
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <?php  
      include 'foot.php'; 
 ?>
</body>
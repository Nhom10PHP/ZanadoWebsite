<style>
        .results {
            color: #009966;
        }
        .results1 {
            color: #FF0000;
        }
</style>
<?PHP
    include('header.php');
    $ma = $_GET['MaTKAdmin'];
    if(isset($_POST['suataikhoan'])){
        $tk=$_POST['tk'];
        $ht=$_POST['ht'];
        $email=$_POST['email'];
        $sdt = $_POST['sdt'];
        $dc=$_POST['dc'];
        if(trim($tk) == null || trim($ht) == null || trim($sdt) == null || trim($email) == null || trim($dc) == null)
            $message = "<p class='results1'>Các trường dữ liệu không được bỏ trống!</p>";
        else {
            $sql_suatk = "UPDATE taikhoanadmin SET TaiKhoan='$tk', HoTen='$ht',SoDienThoai = '$sdt', Email='$email', DiaChi='$dc' WHERE MaTKAdmin= '$ma'"; 
            mysqli_query($conn,$sql_suatk);
            $message = "<p class='results'>Sửa tài khoản thành công!</p>";
        }
    }     
    $qr = $conn->query("SELECT * FROM taikhoanadmin WHERE MaTKAdmin = $ma");
    $dong = $qr ->fetch_assoc();
?>
<div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <form name="frmadd-product" method="post" enctype="multipart/form-data">
            <?php
                if (isset($message)) {
                    echo $message;
            } ?>

            <h3 style="color: red">Sửa Tài Khoản</h3>

            <div class="form-group">
                <label>Tên Tài Khoản</label>
                <input readonly type="text" name="tk" class="form-control" value="<?php echo $dong['TaiKhoan']; ?>"/>
            </div>

            <div class="form-group">
                <label>Họ Tên</label>
                <input type="text" name="ht" class="form-control" value="<?php echo $dong['HoTen']; ?>"/>
            </div>

            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input type="text" name="sdt" class="form-control" value="<?php echo $dong['SoDienThoai']; ?>"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $dong['Email']; ?>"/>
            </div>

            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="dc" class="form-control" value="<?php echo $dong['DiaChi']; ?>"/>
            </div>

            <input type="submit" name="suataikhoan" class="btn btn-primary" value="Xác Nhận"/>
        </form>
    </div>
</div>



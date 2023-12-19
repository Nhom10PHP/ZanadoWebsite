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
    include "config/connect.php";
    
    if(isset($_POST['themtaikhoan'])){
        $tk=$_POST['tk'];
        $mk=$_POST['mk'];
        $ht=$_POST['ht'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $dc=$_POST['dc'];
        if($_POST['loaitk'] == "Admin")
            $loaitk = 0;
        else $loaitk = 1;
        $query = "SELECT TaiKhoan FROM taikhoanadmin WHERE TaiKhoan='{$tk}'";
        $checktk = mysqli_query($conn, $query);
        if(trim($tk) == null || trim($mk) == null || trim($ht) == null || trim($sdt) == null || trim($email) == null || trim($dc) == null)
            $message = "<p class='results1'>Các trường dữ liệu không được bỏ trống!</p>";
        else if(mysqli_num_rows($checktk) == 1)
            $message = "<p class='results1'>Tên tài khoản đã tồn tại!</p>";
        else {
            $sql_themtk="INSERT INTO taikhoanadmin(TaiKhoan,MatKhau,HoTen,SoDienThoai,Email,DiaChi,LoaiTK) 
                    VALUE ('".$tk."','".$mk."','".$ht."','".$sdt."','".$email."','".$dc."','".$loaitk."')";
            mysqli_query($conn,$sql_themtk);
            $message = "<p class='results'>Thêm tài khoản thành công!</p>";
        }
    }
?>
<form name="frmadd-product" method="post" enctype="multipart/form-data">
    <?php
        if (isset($message)) {
            echo $message;
    } ?>

    <h3 style="color: red">Thêm mới tài khoản</h3>

    <div class="form-group">
        <label>Tài Khoản</label>
        <input type="text" name="tk" value="<?php if (isset($_POST['tk'])) echo $_POST['tk'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Mật Khẩu</label>
        <input type="password" name="mk" value="<?php if (isset($_POST['mk'])) echo $_POST['mk'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Họ Tên</label>
        <input type="text" name="ht" value="<?php if (isset($_POST['ht'])) echo $_POST['ht'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" name="sdt" value="<?php if (isset($_POST['sdt'])) echo $_POST['sdt'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Địa Chỉ</label>
        <input type="text" name="dc" value="<?php if (isset($_POST['dc'])) echo $_POST['dc'];?>" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Loại Tài Khoản</label>
        <select name="loaitk" style='padding:5px 10px;border-radius:4px;display: block;'>
                    <option style="text-transform: capitalize;">Admin</option>
                    <option style="text-transform: capitalize;">Nhân viên</option>
                </select>
    </div>

    <input type="submit" name="themtaikhoan" class="btn btn-primary" value="Thêm mới"/>
</form>


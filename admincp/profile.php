<?PHP
    include('header.php');
    if(isset($_SESSION['id'])){
        $ma = $_SESSION['id'];
        $qr = $conn->query("SELECT * FROM taikhoanadmin WHERE MaTKAdmin = $ma");
        $dong = $qr ->fetch_assoc();
    }      
?>
<div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <form name="frmadd-product" method="post" enctype="multipart/form-data">

            <h3>Thông tin tài khoản</h3>

            <div class="form-group">
                <label>Tên tài khoản</label>
                <input readonly type="text" name="tk" class="form-control" value="<?php echo $dong['TaiKhoan']; ?>"/>
            </div>

            <div class="form-group">
                <label>Họ tên</label>
                <input readonly type="text" name="ht" class="form-control" value="<?php echo $dong['HoTen']; ?>"/>
            </div>

            <div class="form-group">
                <label>Số điện thoại</label>
                <input readonly type="text" name="sdt" class="form-control" value="<?php echo $dong['SoDienThoai']; ?>"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input readonly type="text" name="email" class="form-control" value="<?php echo $dong['Email']; ?>"/>
            </div>

            <div class="form-group">
                <label>Địa chỉ</label>
                <input readonly type="text" name="dc" class="form-control" value="<?php echo $dong['DiaChi']; ?>"/>
            </div>
        </form>
    </div>
</div>



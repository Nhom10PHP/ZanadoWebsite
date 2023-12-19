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
    $query = "SELECT TenThongTin, NoiDung FROM thongtin";
    $result = mysqli_query($conn, $query);
    $array_thongtin = array();
    while ( $value = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $array_thongtin[$value['TenThongTin']] = $value['NoiDung']; 
    }
    if(isset($_POST['suathongtin'])){
        $mt = $_POST['mt'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $dc = $_POST['dc'];
        if(trim($mt) == null || trim($sdt) == null || trim($email) == null || trim($dc) == null)
            $message = "<p class='results1'>Các trường dữ liệu không được bỏ trống!</p>";
        else{
            $querymt = "UPDATE thongtin SET NoiDung = '$mt' WHERE TenThongTin= 'mota'";
            mysqli_query($conn,$querymt);
            $querysdt = "UPDATE thongtin SET NoiDung = '$sdt' WHERE TenThongTin= 'phone'";
            mysqli_query($conn,$querysdt);
            $queryemail = "UPDATE thongtin SET NoiDung = '$email' WHERE TenThongTin= 'email'";
            mysqli_query($conn,$queryemail);
            $querydc = "UPDATE thongtin SET NoiDung = '$dc' WHERE TenThongTin= 'diachi'";
            mysqli_query($conn,$querydc);
            $message = "<p class='results'>Sửa thông tin thành công!</p>";
        }
    }
?>
<div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <form name="frmadd-product" method="post" enctype="multipart/form-data">
            <?php
                if (isset($message)) {
                    echo $message;
            } ?>

            <h3 style="color: red">Sửa Thông Tin</h3>

            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="mt" class="form-control" value="<?php if (array_key_exists("mota", $array_thongtin)) { echo trim($array_thongtin['mota']); } ?>"/>
            </div>

            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input type="text" name="sdt" class="form-control" value="<?php if(array_key_exists('phone', $array_thongtin)) { echo trim($array_thongtin['phone']); } ?>"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php if(array_key_exists('email', $array_thongtin)) { echo trim($array_thongtin['email']); } ?>"/>
            </div>

            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="dc" class="form-control" value="<?php if(array_key_exists('diachi', $array_thongtin)) { echo trim($array_thongtin['diachi']); } ?>"/>
            </div>

            <input type="submit" name="suathongtin" class="btn btn-primary" value="Xác Nhận"/>
        </form>
    </div>
</div>



<?PHP
include('header.php');
?>

    <style>
        .results {
            color: #009966;
        }

        .results1 {
            color: #FF0000;
        }
    </style>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <?php
            include('config/connect.php');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $mkht = $_POST['mkht'];
                $mkm =$_POST['mkm'];
                $mk = $mkht;
                $query = "SELECT MaTKAdmin,MatKhau FROM taikhoanadmin WHERE MatKhau='{$mk}' AND MaTKAdmin={$_SESSION['id']}";
                $results = mysqli_query($conn, $query);
                if (mysqli_num_rows($results) == 1) {
                    if(trim($mkht) == null || trim($mkm) == null || trim($_POST['xnmk']) == null)
                        $message = "<p class='results1'>Các trường dữ liệu không được bỏ trống!</p>";
                    else if (trim($_POST['mkm']) != trim($_POST['xnmk'])) {
                        $message = "<p class='results1'>Mật khẩu mới không giống nhau</p>";
                    } else {
                    	$mk = $mkm;

                        $query_update = "UPDATE taikhoanadmin SET MatKhau= '$mk' WHERE MaTKAdmin={$_SESSION['id']}";
                        $results_update = mysqli_query( $conn, $query_update);
                        // if (mysqli_num_rows( $results_update ) > 0) {
                            $message = "<p class='results'>Đổi mật khẩu thành công</p>";
                        /*} else {
                            $message = "<p class='results1'>Đổi mật khẩu không thành công</p>";
                        }*/
                    }
                } else {
                    $message = "<p class='results1'>Mật khẩu cũ không đúng</p>";
                }
            }
            ?>
            <form name="frmchange-password" method="post">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <h3>Thay đổi mật khẩu</h3>
                <div class="form-group">

                    <label>Tài khoản</label>
                    <input readonly type="text" name="tk" value="<?php echo $_SESSION['name'] ?>" class="form-control"
                           placeholder='Nhập tên tài khoản'/>
                </div>

                <div class="form-group">
                    <label>Mật khẩu hiện tại</label>
                    <input type="text" name="mkht" value="<?php if (isset($_POST['mkht'])) echo $_POST['mkht'];?>" class="form-control"
                           placeholder='Nhập mật khẩu hiện tại'/>
                </div>

                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input type="text" name="mkm" value="<?php if (isset($_POST['mkm'])) echo $_POST['mkm'];?>" class="form-control"
                           placeholder='Nhập mật khẩu mới
                           i'/>
                </div>

                <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input type="text" name="xnmk"  value="<?php if (isset($_POST['xnmk'])) echo $_POST['xnmk'];?>" class="form-control"
                           placeholder='Xác nhận mật khẩu'/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Đổi mật khẩu"/>

            </form>
        </div>
    </div>

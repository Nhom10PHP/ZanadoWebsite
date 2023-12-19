<style>
    .results{color:#009966;}
    .results1{color:#FF0000;}
</style>
<?PHP
include('header.php');
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
            include "config/connect.php";
            if(isset($_POST['submit'])) {
                $noidung = $_POST['noidung'];
                $query = "SELECT * FROM thongtin WHERE TenThongTin='gioithieu'";
                $result = mysqli_query($conn, $query);
                if ( mysqli_num_rows($result) > 0 ) {
                    $query_ud = "UPDATE thongtin SET NoiDung='{$noidung}' WHERE TenThongTin='gioithieu'";
                    $result_ud = mysqli_query($conn, $query_ud);
                    echo "<p class='results'> Lưu thành công </p>";
                } else {
                    $query_is = "INSERT INTO thongtin(TenThongTin, NoiDung) VALUES('gioithieu', '{$noidung}')";
                    $result_is = mysqli_query($conn, $query_is);
                    echo "<p class='results'> Lưu thành công </p>";
                }
            }
            $query = "SELECT * FROM thongtin WHERE TenThongTin='gioithieu'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0 ) {
                extract( mysqli_fetch_array($result) );
            }
        ?>
        <form name="frmadd-video" method="post">
            <?php
            if(isset($message)){echo $message;}
            ?>
            <h2 style="color: red">Giới thiệu</h2>
            <div class="form-group">
                <label>Nội dung</label>
               <textarea style="height: 320px" name="noidung" id="noidung-gioithieu" class="form-control" > <?php echo isset($NoiDung) ? $NoiDung : ''  ?></textarea> 
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Lưu"/>
        </form>
    </div>
</div>
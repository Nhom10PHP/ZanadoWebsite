<?PHP include "./header.php"; ?>

<style>
    .results{color:#009966;}
    .results1{color:#FF0000;}
</style>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <?php
                $ma = $_GET['id'];
            ?>

        <?php
       
        if(isset($_POST['submit'])) {
            $mt = $_POST['tenhuyen'];
            $tt = $_POST['tp'];
            $sql = "UPDATE `huyen` SET `tenhuyen`='$mt',`matinhthanh`='$tt' WHERE Mahuyen = $ma";
            if($conn->query($sql))
                echo "<script>alert('Sửa thành công')</script>";
        }
        ?>
        <?php
                $qr = $conn->query("SELECT * FROM tinhthanh join huyen on tinhthanh.MaTinhThanh = huyen.MaTinhThanh WHERE MaHuyen = $ma");
                $dong = $qr ->fetch_assoc();
            ?>
        <form name="frmadd-video" method="post">
            <?php
            if(isset($message)){echo $message;}
            ?>
            <h2 style="color: red">Sửa quận huyện "<?php echo $dong['TenTinhThanh'] ?>"</h2>
            <div class="form-group">
                <label>Tên quận huyện</label>
                <input type="text" name="tenhuyen" class="form-control" value="<?php echo $dong['TenHuyen'] ?>"/>         
            </div>
            <div class="form-group">
                <label>Thuộc thành phố</label>
                <select name="tp" style="padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                
                <?php
                $query = "SELECT MaTinhThanh,TenTinhThanh FROM tinhthanh Order By TenTinhThanh";
                $result = mysqli_query($conn, $query);
                while ( $rows = mysqli_fetch_array($result, MYSQLI_NUM) ) { ?>
                    <option value="<?php echo $rows[0]; ?>"> <?php echo $rows[1]; ?> </option>
                    <?php }?>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Xác Nhận"/>

        </form>
    </div>
</div>

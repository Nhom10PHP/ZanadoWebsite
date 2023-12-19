<?PHP include "./header.php"; ?>
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
                $ma = $_GET['id'];
            ?>
            <?php
                if(isset($_POST['submit'])) {
                    $mt = $_POST['code_city'];
                    $tt = $_POST['name_city'];
                    $sql = "UPDATE `tinhthanh` SET `matinhthanh`='$mt',`tentinhthanh`='$tt' WHERE Matinhthanh = $ma";
                    if($conn->query($sql))
                    echo "<script>alert('Sửa thành công')</script>";
                }
            ?>
            <?php
                $qr = $conn->query("SELECT * FROM tinhthanh WHERE matinhthanh = $ma");
                $dong = $qr ->fetch_assoc();
            ?>
            <form name="frmadd-video" method="post">
                <h2 style=" color: red">Chỉnh sửa - thành phố "<?php echo $dong['TenTinhThanh'] ?>"</h2>
                <div class="form-group">
                    <label>Mã tỉnh thành phố</label>
                    <input type="text" name="code_city" value="<?php echo $dong['MaTinhThanh']; ?>" class="form-control" placeholder='Mã thành phố'/>
                </div>

                <div class="form-group">
                    <label>Tên tỉnh thành phố</label>
                    <input type="text" name="name_city" value="<?php echo $dong['TenTinhThanh']; ?>" class="form-control" id="name_category" placeholder='Tên thành phố'/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Chỉnh sửa"/>

            </form>
        </div>
    </div>


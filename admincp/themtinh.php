<?PHP include "./header.php"; ?>

<style>
    .results{color:#009966;}
    .results1{color:#FF0000;}
</style>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
        if(isset($_POST['submit'])) {
            $mt = $_POST['code_city'];
            $tt = $_POST['name_city'];
            $sql = "INSERT INTO tinhthanh VALUE('$mt','$tt')";
            if($conn->query($sql))
                echo "<script>alert('Thêm thành công')</script>";
            $conn->close();
        }
        ?>
        <form name="frmadd-video" method="post">
            <?php
            if(isset($message)){echo $message;}
            ?>
            <h2 style="color: red">Thêm mới</h2>
            <div class="form-group">
                <label>Mã Tỉnh/Thành Phố</label>
                <input type="text" name="code_city"  class="form-control"/>
                <?php
                if (isset($errors) && in_array('code_city',$errors))
                {
                    echo "<p class='results1' >Bạn hãy nhập mã loại thành phố</p>";
                }
                ?>
            </div>

            <div class="form-group">
                <label>Tên Tỉnh/Thành Phố</label>
                <input type="text" name="name_city" class="form-control"/>
                <?php
                if (isset($errors) && in_array('name_city',$errors))
                {
                    echo "<p class='results1' >Bạn hãy nhập tên thành phố</p>";
                }

                ?>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Thêm mới"/>

        </form>
    </div>
</div>

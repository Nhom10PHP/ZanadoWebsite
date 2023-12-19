<?PHP
include('header.php');
?>
<div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <?php
        $ma = $_GET['MaTT'];
    ?>
    <?php
    if(isset($_POST['themtintuc'])){

        $tentt=$_POST['tentt'];
        $noidungtt=$_POST['noidungtt'];
        $file=$_FILES['hinhanh'];
        $hinhanh=$file['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $hinhanhgio=time().'_'.$hinhanh;    
        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'../asset/images/'.$hinhanh);
                
                $sql_suatt = "UPDATE tintuc SET TenTT='$tentt', NoiDung= '$noidungtt',AnhTT='$hinhanh' WHERE MaTT= '$ma'";
                mysqli_query($conn,$sql_suatt);

            }else {
                $hinhanh='';
            }
        }
        echo "<script>alert('Sửa thành công')</script>";
    }
    
?>
    <?php
        $qr = $conn->query("SELECT * FROM tintuc WHERE MaTT = $ma");
        $dong = $qr ->fetch_assoc();
    ?>
   <form name="frmadd-product" method="post" enctype="multipart/form-data">
    <h3 style="color: red">Sửa tin tức</h3>
    <div class="form-group">
        <label>Tên tin tức</label>
        <input type="text" name="tentt" class="form-control" value="<?php echo $dong['TenTT']; ?>"/>
    </div>

    <div class="form-group">

        <label>Ảnh tin tức</label>
        <input type="file" value="<?php echo $dong['AnhTT']; ?>" multiple="multiple" name="hinhanh"/>
    </div>

    <div class="form-group">
        <label>Mô tả tin tức</label>
        <textarea name="noidungtt" class="form-control" value=""><?php echo $dong['NoiDung']; ?></textarea>
    </div>

    <input type="submit" name="themtintuc" class="btn btn-primary" value="Xác Nhận"/>

</form>
</div>
</div>


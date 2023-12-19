<?PHP
include('header.php');
?>
<div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <?php
    if(isset($_POST['themtintuc'])){

        $tentt=$_POST['tentt'];
        $matt=$_POST['matt'];
        $noidungtt=$_POST['noidungtt'];
        $file=$_FILES['hinhanh'];
        $hinhanh=$file['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $hinhanhgio=time().'_'.$hinhanh;    
        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'../asset/images/'.$hinhanh);
                
                $sql_themtt="INSERT INTO tintuc(TenTT,MaTT,NoiDung,AnhTT) 
                VALUE ('".$tentt."','".$matt."','".$noidungtt."','".$hinhanh."')";
                mysqli_query($conn,$sql_themtt);

            }else {
                $hinhanh='';
            }
        }
        echo "<script>alert('Thêm thành công')</script>";
    }
    
?>
   <form name="frmadd-product" method="post" enctype="multipart/form-data">
    <h3 style="color: red">Thêm mới tin tức</h3>
    <div class="form-group">
        <label>Mã tin tức</label>
        <input type="text" name="matt" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Tên tin tức</label>
        <input type="text" name="tentt" class="form-control"/>
    </div>

    <div class="form-group">

        <label>Ảnh tin tức</label>
        <input type="file" value="" multiple="multiple" name="hinhanh"/>
    </div>

    <div class="form-group">
        <label>Mô tả tin tức</label>
        <textarea name="noidungtt" class="form-control"></textarea>
    </div>

    <input type="submit" name="themtintuc" class="btn btn-primary" value="Thêm mới"/>

</form>
</div>
</div>


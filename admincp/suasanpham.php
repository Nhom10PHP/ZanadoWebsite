<?PHP
include('header.php');
?>
    <?php 
        $sua= $_GET['MaSP'];
        $sql = "SELECT * FROM sanpham JOIN theloai ON sanpham.MaTheLoai=theloai.MaTheLoai JOIN danhmuc ON sanpham.MaDM=danhmuc.MaDM WHERE MaSP = '$sua' "; 
        $query=mysqli_query($conn,$sql);

        $row=mysqli_fetch_assoc($query);
        $theloai=$row['MaTheLoai'];
        $dm=$row['MaDM'];
        $sql_theloai = "SELECT * FROM theloai WHERE MaTheLoai != '$theloai' "; 
        $query_theloai = mysqli_query($conn,$sql_theloai);
        $sql_danhmuc = "SELECT * FROM danhmuc WHERE MaDM != '$dm'";
        $query_danhmuc=mysqli_query($conn,$sql_danhmuc); 
    ?>
     <link rel="stylesheet" href="../asset/font/themify-icons/themify-icons.css">
    <a href="quanlysanpham.php" style="margin-top:20px" ><button class="ti-angle-left" style="margin-top:20px; width:80px;height:32px"></button></a>
    <div class="row wrap-add-product">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <form name="frmadd-product" method="post" enctype="multipart/form-data">
        <h3 style="color: red">Sửa Sản Phẩm</h3>
        <div class="form-group">
                <label>Mã sản phẩm</label>
                <input readonly type="text" name="masanpham" class="form-control" value="<?php echo $id=$_GET['MaSP'];?>"/>
            </div>
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="tensanpham" value="<?php echo $masp=$row['TenSanPham']?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <img id="output" class="img-rounded" alt="" width="180" height="200" src="../asset/images/<?php echo $row['AnhSanPham']?>" />
            <p><label for="ufile" style="cursor: pointer;">Chọn file ảnh</label></p>
            <input name="hinhanh" id="ufile" type="file" style="display: none;" onchange="loadFile(event)" />
            
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="number" value="<?php echo $row['Gia']?>" name="giasp" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="text" value="<?php echo $row['SoLuong']?>" name="soluong" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Tình trạng</label>
            <select name="tinhtrang">
            <option value="conhang">Còn hàng</option>
            <option value="hethang">Hết hàng</option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="mota" id="" cols="30" rows="10" class="form-control"><?php echo $row['MoTa']?></textarea>
        </div>
        <div class="form-group">
            <label>Danh mục</label>
            <select name="danhmuc">
            <option value="<?php echo $row['MaDM'] ?>"><?php echo $row['TenDM']?></option>
            <?php 
            while($rowdm = mysqli_fetch_assoc($query_danhmuc)){
            ?>
            <option value="<?php echo $rowdm['MaDM'] ?>"><?php echo $rowdm['TenDM']?></option>
            <?php  } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Thể loại</label>
            <select name="theloai">
            <option value="<?php echo $row['MaTheLoai'] ?>"><?php echo $row['TenTL']?></option>
            <?php 
            while($rowtl = mysqli_fetch_assoc($query_theloai)){
            ?>

            <option value="<?php echo $rowtl['MaTheLoai'] ?>"><?php echo $rowtl['TenTL']?></option>
            <?php  } ?>
            </select>
        </div>
        <input type="submit" name="sua" class="btn btn-primary" value="Sửa sản phẩm"/>
    </form>
</table>
</div> 
<?php  
if(isset($_POST['sua'])){
    $ten=$_POST['tensanpham'];
    $gia=$_POST['giasp'];
    $sl=$_POST['soluong'];
    $tinhtrang=$_POST['tinhtrang'];
    $mota=$_POST['mota'];
    $madanhmuc=$_POST['danhmuc']; 
    $matheloai=$_POST['theloai'];

     //xử lý hình anh
    $file=$_FILES['hinhanh'];
    $hinhanh=$file['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhgio=time().'_'.$hinhanh;    

    if(isset($_FILES['hinhanh'])){
        if($file['type']== 'image/jpeg'||$file['type']== 'image/jpg'||$file['type']== 'image/png'){
            move_uploaded_file($hinhanh_tmp,'../asset/images/'.$hinhanh);
            $sql_suasp = "UPDATE sanpham SET TenSanPham='$ten',AnhSanPham='$hinhanh',Gia= '$gia',SoLuong='$sl',TinhTrang='$tinhtrang',MoTa='$mota',MaDM='$madanhmuc',MaTheLoai='$matheloai' WHERE MaSP= '$id'"; 
            if($conn -> query($sql_suasp)){
                echo '<script>alert("Sửa sản phẩm thành công !");</script>';
            }
            
        }else {
            #$hinhanh='';
            #header('location:quanlysanpham.php');
        }
    }
}
?>
</body>
<script>
    var loadFile = function (event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
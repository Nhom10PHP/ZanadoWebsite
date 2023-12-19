<?PHP
include('header.php');
?>
    <?php 
        $sql_danhmuc = "SELECT * FROM danhmuc";
        $query_danhmuc=mysqli_query($conn,$sql_danhmuc); 
        $sql_theloai = "SELECT * FROM theloai"; 
        $query_theloai = mysqli_query($conn,$sql_theloai); 
    ?>
    <link rel="stylesheet" href="../asset/font/themify-icons/themify-icons.css">
    <a href="quanlysanpham.php" style="margin-top:20px" ><button class="ti-angle-left" style="margin-top:20px; width:80px;height:32px"></button></a>
    <div class="card-list">
    <h3 style="color: red">Xử lý thêm sản phẩm</h3>
    <form method="POST" enctype="multipart/form-data" name="frmadd-product">
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="ten" value="<?php if (isset($_POST['ten'])) echo $_POST['ten'];?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" name="hinhanh"/>
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="text" name="gia" value="<?php if (isset($_POST['gia'])) echo $_POST['gia'];?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="text" name="soluong" value="<?php if (isset($_POST['soluong'])) echo $_POST['soluong'];?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Tình trạng</label>
            <select name="tinhtrang">
            <option value="Còn hàng">Còn hàng</option>
            <option value="Hết hàng">Hết hàng</option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="mota" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Danh mục</label>
            <select name="danhmuc">
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
            <?php 
            while($rowtl = mysqli_fetch_assoc($query_theloai)){
            ?>
            <option value="<?php echo $rowtl['MaTheLoai'] ?>"><?php echo $rowtl['TenTL']?></option>
            <?php  } ?>
            </select>
        </div> 
        <input type="submit" value="Thêm sản phẩm" name="them" class="btn btn-primary">
    </form>
</table>
</div> 
<?php  
if(isset($_POST['them'])){
    $ten=$_POST['ten'];
    $gia=$_POST['gia'];
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
        if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
            move_uploaded_file($hinhanh_tmp,'../asset/images/'.$hinhanh);
            $sql_themsp="INSERT INTO sanpham(TenSanPham,AnhSanPham,Gia,SoLuong,TinhTrang,MoTa,MaDM,MaTheLoai) 
                VALUE ('".$ten."','".$hinhanh."','".$gia."','".$sl."','".$tinhtrang."','".$mota."','".$madanhmuc."','".$matheloai."')";
            
            if($conn -> query($sql_themsp)){
                echo '<script>alert("Thêm sản phẩm thành công !");</script>';
            }
            
        }else {
            $hinhanh='';
            header('location:quanlysanpham.php');
        }
    }
}
?>
</body>
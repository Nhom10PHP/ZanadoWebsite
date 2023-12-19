<?PHP
include('header.php');
?>
 <link rel="stylesheet" href="../asset/font/themify-icons/themify-icons.css">
<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Quản lý danh mục
        </h2>
        <?php 
            $sql = "SELECT * FROM danhmuc"; 
            $query=mysqli_query($conn,$sql);
        ?>
        <table class="table table-hover"> 
            <thead>
                <tr>    
                    <th >STT</th>
                    <th >Mã Danh Mục</th>
                    <th >Tên Danh Mục </th>
                    <th >Mô Tả Danh Mục</th>
                    <th> Xóa </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $i=1; 
                    while($row=mysqli_fetch_assoc($query)){ ?> 
                        <tr> 
                            <td> <?php echo $i++  ?></td>
                            <td> <?php  echo $madm = $row['MaDM']?> </td>
                            <td> <?php echo $masp=$row['TenDM']?></td>
                            <td> <?php echo $hoten=$row['MoTaDM']?> </td>
                            <td>                                 
                                <a onClick="return confirm('Bạn có chắn chắn xóa danh mục có mã <?php echo  $row['MaDM'] ?> không?');" href="xuly.php?MaDanhMuc=<?php echo $row['MaDM'];?>"> <i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a>
                            </td>
                        </tr>
                    <?php }   ?>  
                </tbody>
                <form action="xuly.php" method="post">
                    <div>
                        <label for="">Nhập mã danh mục *</label>
                        <br>
                        <input type="text" name="txtma" required name = "" id="">
                        <br>
                        <label for="">Nhập tên danh mục *</label>
                        <br>
                        <input type="text" name="txttendm" required name = "" id="">
                        <br>
                        <label for="">Mô tả danh mục *</label>
                        <br>
                        <input type="textarea" name="txtmota" required name = "" id="">
                    </div>
                        <button onClick="return confirm('Bạn có muốn thêm danh mục này không ?');" name="them" class="ti-plus" style="margin-top:10px"> THÊM </button>
                        <button onClick="return confirm('Bạn có muốn sửa danh mục này không ? *Mã danh mục phải có trong CSDL*');" name="sua" class="ti-pencil-alt" style="margin-top:12px;margin-left:4px"> SỬA </button>
                </form>
        </table>
    </div> 
</div>
</body>
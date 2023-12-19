<?PHP
include('header.php');
?>
<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Quản lý sản phẩm
            <a href="themsanpham.php" style="float: right; color:#1b926c; font-size: 20px;">Thêm<i
                class="fa fa-fw fa-plus-square-o"
                style="font-size: 25px; color:#1b926c; float: right; padding-left: 10px; padding-right: 75px;"></i></a>
        </h2>
    <?php 
        $sql = "SELECT * FROM sanpham"; 
        $query=mysqli_query($conn,$sql);
    ?>
        <table class="table table-hover"> 
            <thead>
                <tr>    
                    
                    <th >Mã Sản Phẩm</th>
                    <th >Tên Sản Phẩm</th>
                    <th >Ảnh Sản Phẩm</th>
                    <th> Giá </th>
                    <th> Số Lượng </th>
                    <th> Tình Trạng</th>
                    <th> Mô Tả</th>
                    <th> MaDM</th>
                    <th> MaTheLoai</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                    
                </tr>
            </thead>
            
                     <div>
                    <tbody>
                       
                        <?php 
                         $i=1; 
                        ?>
                        <?php while($row=mysqli_fetch_assoc($query)){ 
                              
                            ?> 
                            <tr> 
                            
                                <td> <?php  echo $madm = $row['MaSP']?> </td>
                                <td> <?php echo $masp=$row['TenSanPham']?></td>
                                <td> <img src="../asset/images/<?php echo $row['AnhSanPham']?>" width=100px height: 100px> </td>
                                <td> <?php echo $row['Gia']?> </td>
                                <td> <?php echo $row['SoLuong']?> </td>
                                <td> <?php echo $row['TinhTrang']?> </td>
                                <td> <?php echo $row['MoTa']?> </td>
                                <td> <?php echo $row['MaDM']?> </td>
                                <td> <?php echo $row['MaTheLoai']?> </td>
                                <td>
                                <a onClick="return confirm('Bạn có chắn chắn xóa sản phẩm có mã <?php echo  $row['MaSP'] ?> không?');" href="xoasanpham.php?MaSP=<?php echo $row['MaSP'];?>"> <i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a>
                                </td>
                                <td>
                                <a onClick="return confirm('Bạn có chắn chắn sửa sản phẩm có mã <?php echo  $row['MaSP'] ?> không?');" href="suasanpham.php?MaSP=<?php echo $row['MaSP'];?>"> <i class="fa fa-fw fa-pencil" style="font-size: 20px; color:#1b926c;"></i></a>
                                </td>
                                
                            
                            </tr>
                        <?php }   ?>  
                              
                            
                       
                    </tbody>
                    </div>
                   
        </table>
</body>
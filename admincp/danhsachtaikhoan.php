<?PHP
include('header.php');
?>
<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Danh sách tài khoản  
            <a href="themtaikhoan.php" style="float: right; color:#1b926c; font-size: 20px;">Thêm<i
                class="fa fa-fw fa-plus-square-o"
                style="font-size: 25px; color:#1b926c; float: right; padding-left: 10px; padding-right: 75px;"></i></a>
            </h2>
    <?php 
        $sql = "SELECT * FROM taikhoanadmin"; 
        $query=mysqli_query($conn,$sql);
    ?>

        <table class="table table-hover"> 
            <thead>
                <tr>    
                    <th >Tài khoản</th>
                    <th >Họ tên</th>
                    <th >Loại tài khoản</th>
                    <th >Email</th>
                    <th >Địa chỉ</th>
                    <th >Sửa</th>
                    <th> Xóa </th>
                </tr>
            </thead>
                <form  action="" enctype="multipart/form-data" method="post">
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($query)){ ?> 
                            <tr>
                                <td> <?php echo $tk=$row['TaiKhoan']?> </td>
                                <td> <?php echo $ht=$row['HoTen']?> </td>
                                <td> <?php $loaitk=$row['LoaiTK'];
                                        if($loaitk == 0) {echo "Admin";}
                                        else {echo "Nhân viên";} ?>
                                </td>
                                <td> <?php echo $email=$row['Email']?> </td>
                                <td> <?php echo $dc=$row['DiaChi']?> </td>
                                
                                <td>                                 
                                    <a href="suataikhoan.php ?MaTKAdmin=<?php echo $row['MaTKAdmin'];?>"><i class="fa fa-fw fa-pencil" style="font-size: 20px; color:#1b926c;"></i></a>
                                </td>
                                <td>                                 
                                    <a onClick="return confirm('Bạn thật sự muốn xóa không ?');" href="xoataikhoan.php ?MaTKAdmin=<?php echo $row['MaTKAdmin'];?>"><i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a>
                                </td>
                            </tr>
                        <?php }   ?>            
                    </tbody>
                </form>
                
        </table>
    </div> 
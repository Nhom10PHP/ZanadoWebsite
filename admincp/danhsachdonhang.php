<?PHP
include('header.php');
?>
<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Danh sách đơn hàng</h2>
    <?php 
        $sql = "SELECT * FROM donhang"; 
        $query=mysqli_query($conn,$sql);
    ?>
    <table class="table table-hover"> 
            <thead>
                <tr>    
                    <th >STT</th>
                    <th >Mã Đơn Hàng</th>
                    <th >Mã Sản Phẩm </th>
                    <th >Họ Tên</th>
                    <th >Số Điện Thoại</th>
                    <th> Ngày Đặt </th>
                    <th> Tình Trạng</th>
                    <th> Phê Duyệt</th>
                    <th> Xem Chi Tiết</th>
                    <th> Xóa</th>
                </tr>
            </thead>
                <form  action="" enctype="multipart/form-data" method="post">
                    <tbody>
                        <?php 
                         $i=1; 
                        ?>
                        <?php while($row=mysqli_fetch_assoc($query)){ 
                              
                            ?> 
                            <tr> 
                                <td> <?php echo $i++  ?></td>
                                <td> <?php  echo $id=$row['MaDonHang']?> </td>
                                <td> <?php echo $masp=$row['MaSP']?></td>
                                <td> <?php echo $hoten=$row['HoTen']?> </td>
                                <td> <?php echo $sdt=$row['SoDienThoai']?> </td>
                                <td> <?php echo $ngaydat=$row['NgayDat']?> </td>
                                <td>
                                     <?php  
                                        if($row['TinhTrang'] == 0){
                                            echo  'Chưa phê duyệt'; 
                                        }
                                        else 
                                        echo 'Đã phê duyệt'; 
                                     ?>
                                </td>
                                <td>                                 
                                   <a onClick="return confirm('Bạn có chắn chắn phê duyệt đơn hàng <?php $row['MaDonHang']?> không ?');" href="pheduyet.php?MaDH=<?php echo $id?>"> <i class="glyphicon glyphicon-ok"></i></a>
                                </td>
                                <td>

                                  <a href="xemchitietdonhang.php?MaDH=<?php echo $id?>"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                  <a onClick="return confirm('Bạn có chắn chắn muốn xóa đơn hàng <?php $row['MaDonHang']?> không ?');" href="xoadonhang.php?MaDH=<?php echo $id?>"><i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a>
                                </td>
                            </tr>
                        <?php }   ?>            
                    </tbody>
                </form>
        </table>
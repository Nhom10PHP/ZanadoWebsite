<?PHP include "./header.php"; ?>

<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Danh sách liên hệ</h2>
            
            <?PHP 
                $sql = "SELECT * FROM lienhe";
                $result = $conn->query($sql);
             ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã liên hệ</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Nội dung</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                </tr>
        <?php
            if($result->num_rows>0) {
                $index = 1;
                while($row = $result->fetch_assoc()) {
                    
                    ?>
                    <tr>
                        <td><?php echo $index++ ?></td>
                        <td><?php echo $row['MaLienHe'] ?></td>
                        <td><?php echo $row['Ten'] ?></td>
                        <td><?php echo $row['SoDienThoai'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['NoiDung'] ?></td>
                        <td><a href="xoalienhe.php?MaLienHe=<?php echo $row['MaLienHe']; ?>"onclick=" return window.confirm('Xác nhận Xoá')"><i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a></td>
                        
                    </tr>
    <?php
                }
            }
            ?>
              </tbody>
          </table>
            
      </div>
  </div>


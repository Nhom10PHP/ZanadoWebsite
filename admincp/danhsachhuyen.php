<?PHP include "./header.php"; ?>

<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Danh sách quận huyện
            <a href="themhuyen.php" style="float: right; color:#1b926c; font-size: 20px;">Thêm<i
                class="fa fa-fw fa-plus-square-o"
                style="font-size: 25px; color:#1b926c; float: right; padding-left: 10px; padding-right: 75px;"></i></a>
            </h2>
            
            <?PHP 
                $sql = "SELECT * FROM tinhthanh join huyen on tinhthanh.MaTinhThanh = huyen.MaTinhThanh order by TinhThanh.TenTinhThanh" ;
                $result = $conn->query($sql);
             ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã quận huyện</th>
                        <th>Tên quận huyện</th>
                        <th>Thuộc thành phố</th>
                        <th>Sửa</th>
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
                        <td><?php echo $row['MaHuyen'] ?></td>
                        <td><?php echo $row['TenHuyen'] ?></td>
                        <td><?php echo $row['TenTinhThanh'] ?></td>
                        <td><a href="suahuyen.php?id=<?php echo $row['MaHuyen']; ?>"><i class="fa fa-fw fa-pencil" style="font-size: 20px; color:#1b926c;"></i></a></td>
                        <td><a href="xoahuyen.php?id=<?php echo $row['MaHuyen']; ?>"onclick=" return window.confirm('Xác nhận Xoá')"><i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a></td>
                        
                    </tr>
    <?php
                }
            }
            ?>
              </tbody>
          </table>
            
      </div>
  </div>


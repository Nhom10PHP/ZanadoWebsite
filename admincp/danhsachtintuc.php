<?PHP include "./header.php"; ?>

<div class="row product-category">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style=" color: red">Danh sách tin tức   
            <a href="themtintuc.php" style="float: right; color:#1b926c; font-size: 20px;">Thêm<i
                class="fa fa-fw fa-plus-square-o"
                style="font-size: 25px; color:#1b926c; float: right; padding-left: 10px; padding-right: 75px;"></i></a>
            </h2>
            
            <?PHP 
                $sql = "SELECT * FROM tintuc";
                $result = $conn->query($sql);
             ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Tin Tức</th>
                        <th>Ảnh Minh Hoạ</th>
                        <th>Nội Dung</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
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
                        <td><?php echo $row['TenTT'] ?></td>
                        <td><img width="150px" height="80px" src="../asset/images/<?php echo $row['AnhTT'];?>"></td>
                        <td><?php echo $row['NoiDung'] ?></td>
                        <td><a href="suatintuc.php?MaTT=<?php echo $row['MaTT']; ?>"><i class="fa fa-fw fa-pencil" style="font-size: 20px; color:#1b926c;"></i></a></td>
                        <td><a href="xoatintuc.php?MaTT=<?php echo $row['MaTT']; ?>"onclick=" return window.confirm('Xác nhận Xoá')"><i class="fa fa-fw fa-trash" style="font-size: 20px; color:rgba(26,27,23,0.87);"></i></a></td>
                        
                    </tr>
    <?php
                }
            }
            ?>
              </tbody>
          </table>
            
      </div>
  </div>


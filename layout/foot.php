<!DOCTYPE html>
<html>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
	Zanado
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="../asset/font/themify-icons/themify-icons.css">
    <style>
		.nd{
			color: #fff;
		}
		footer{
			height:324px;
		}
	    .wapper3{
			margin-top:40px
		}
    </style>
    <footer>
	<div class="container" >

		<div class="row" style="padding: 25px 0">
				<p><img src="../asset/images/logoss.jpg" width="70%" height="70%"></p>
				<p class="nd">
					<?php
					$query_description = 'SELECT NoiDung FROM thongtin WHERE TenThongTin = "mota"';
					$result_description = mysqli_query($conn, $query_description);
					if( mysqli_num_rows($result_description) > 0 ){
						extract( mysqli_fetch_array($result_description, MYSQLI_ASSOC) );
						echo $NoiDung;
					}
					?> 
				</p>
			</div>
			<div class="col-xs-12 col-sm-3 wapper3">
					<h3 class="nd"><span ><i class="glyphicon glyphicon-envelope"></i></span>
						Danh mục
					</h3>
					<ul style="margin-right:40px">
						<?php showdm()  ?>
						
					</ul>
				</div>

		<div class="col-xs-12 col-sm-3 wapper3">
					<h3 class="nd"><span ><i class="glyphicon glyphicon-envelope"></i></span>
						Liên hệ
					</h3>
					<ul>
						<!-- query email -->
						<?php
						$query_email = 'SELECT NoiDung FROM thongtin WHERE TenThongTin = "email"';
						$result_email = mysqli_query($conn, $query_email);
						if( mysqli_num_rows($result_email) > 0 ) { 
							extract( mysqli_fetch_array($result_email, MYSQLI_ASSOC) );
							$array_email = explode(' ', trim($NoiDung));
							foreach ($array_email as $NoiDung) {
								?>
								<li class="nd"><span><i class="glyphicon glyphicon-map-marker"></i></span>Email: <?php echo $NoiDung; ?></li>
								<?php 
							}
						}
						?>

						<!-- query dia chi -->
						<?php
						$query_adress = 'SELECT NoiDung FROM thongtin WHERE TenThongTin = "diachi"';
						$result_adress = mysqli_query($conn, $query_adress);
						if( mysqli_num_rows($result_adress) > 0 ) { 
							extract( mysqli_fetch_array($result_adress, MYSQLI_ASSOC) );
							$array_adress = explode("$%^$%^", trim($NoiDung, "$%^$%^") );
							foreach ($array_adress as $NoiDung) {
								?>
								<li class="nd"><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ: <?php echo $NoiDung; ?></li>
								<?php 
							}
						}
						?>
						<!-- query sdt -->
						<?php
						$query_phone = 'SELECT NoiDung FROM thongtin WHERE TenThongTin = "phone"';
						$result_phone = mysqli_query($conn, $query_phone);
						if( mysqli_num_rows($result_phone) > 0 ) { 
							extract( mysqli_fetch_array($result_phone, MYSQLI_ASSOC) );
							$array_email = explode(' ', trim($NoiDung));
							foreach ($array_email as $NoiDung) {
								?>
								<li class="nd"><span><i class="glyphicon glyphicon-map-marker"></i></span>Điện thoại: <?php echo $NoiDung; ?></li>
								<?php 
							}
						}
						?>
					</ul>
				</div>

			</div>
		</div>
		<div id="footer">
            <div class="social-li">

                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-youtube"></i></a>
                <a href=""><i class="ti-pinterest"></i></a>
                <a href=""><i class="ti-twitter-alt"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </footer>
	
</html>
<?php  
     function showdm(){
           include "../Back-enddevelopment/connect.php";
            $sql_dm ="SELECT * FROM danhmuc";
            $query_dm = mysqli_query($conn,$sql_dm);
            while($rowdm = mysqli_fetch_assoc($query_dm)){
                $madm = $rowdm['MaDM'];
                 echo 
                 '
                 <a style="color:#ccc" class="dropdown-item" href="danhmuc.php?MaDM='.$madm.'">'. $rowdm['TenDM'] .'</a>
                 '; 
            }  
     }

    ?>
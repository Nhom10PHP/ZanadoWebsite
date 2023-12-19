<?php 
	include('config/connect.php');
    if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1))){
    $ma = $_GET['id'];
    $sql2 = "DELETE FROM tinhthanh WHERE matinhthanh = $ma";
    $conn->query($sql2);
    header('location:danhsachtinh.php');
}
?>
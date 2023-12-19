<?php 
	include('config/connect.php');
    $ma = $_GET['id'];
    $sql = "DELETE FROM huyen WHERE mahuyen = $ma";
    $conn->query($sql);
    header('location:danhsachhuyen.php');
?>
<?php 
include "config/connect.php";
if(isset($_REQUEST['MaSP']) and $_REQUEST['MaSP']!=""){
    $masp= $_GET['MaSP'];
    $sql = "DELETE FROM sanpham WHERE MaSP = '$masp'"; 
    $query_sanphamtheodm = "DELETE FROM sanpham WHERE MaSP = '$masp'";
   if($conn ->query($query_sanphamtheodm) == TRUE){
   header("location:quanlysanpham.php"); 

        }
    }
?>
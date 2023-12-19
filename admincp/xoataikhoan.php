<?php  
    include "config/connect.php";
    if(isset($_REQUEST['MaTKAdmin']) and $_REQUEST['MaTKAdmin']!=""){

    $ma = $_GET['MaTKAdmin'];
    $sql = "DELETE FROM taikhoanadmin WHERE MaTKAdmin = '$ma'"; 
    if($conn ->query($sql)==TRUE){
        header('Location:danhsachtaikhoan.php');    
    }
    else 
    {
         echo "Lỗi :";
    }
   
 }
?>
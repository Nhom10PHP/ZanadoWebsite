<?php  
    include "config/connect.php";
    if(isset($_REQUEST['MaTT']) and $_REQUEST['MaTT']!=""){

    $matt = $_GET['MaTT']; 
    $sql = "DELETE FROM tintuc WHERE MaTT = '$matt'"; 
    if($conn ->query($sql)==TRUE){
        header('Location:danhsachtintuc.php');    
    }
    else 
    {
         echo "Lỗi :";
    }
   
 }
?>
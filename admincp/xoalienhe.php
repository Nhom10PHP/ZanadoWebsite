<?php  
    include "config/connect.php";
    if(isset($_REQUEST['MaLienHe']) and $_REQUEST['MaLienHe']!=""){

    $malh = $_GET['MaLienHe']; 
    $sql = "DELETE FROM lienhe WHERE MaLienHe = '$malh'"; 
    if($conn ->query($sql)==TRUE){
        header('Location:danhsachlienhe.php');    
    }
    else 
    {
         echo "Lỗi :";
    }
   
 }
?>
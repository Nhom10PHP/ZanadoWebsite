<?php  
                   include "config/connect.php";
                     if(isset($_POST['them'])){
                         $madm = $_POST['txtma']; 
                         $tendm = $_POST['txttendm']; 
                         $motadm = $_POST['txtmota']; 
                         if($conn -> query("INSERT INTO danhmuc(MaDM,TenDM,MoTaDM) 
                         VALUES ('$madm','$tendm','$motadm')")){
                           header("location:quanlydanhmuc.php");
                         }
                     }

                     if(isset($_POST['sua'])){
                        $madm = $_POST['txtma']; 
                         $tendm = $_POST['txttendm']; 
                         $motadm = $_POST['txtmota'];
                         $sql = "UPDATE danhmuc SET TenDM='$tendm',MoTaDM='$motadm' WHERE MaDM= '$madm'";
                         if($conn -> query($sql)){
                            header("location:quanlydanhmuc.php");
                         } 
                     }
                     if(isset($_REQUEST['MaDanhMuc']) and $_REQUEST['MaDanhMuc']!=""){
                      $madm = $_GET['MaDanhMuc'];
                      $sql = "DELETE FROM danhmuc WHERE MaDM = '$madm'"; 
                      $sql_sanphamtheodm = "DELETE FROM sanpham    WHERE MaDM = '$madm'";
                     if($conn ->query($sql) == TRUE){
                     header("location:quanlydanhmuc.php"); 
                  
                          }
                      }
?>
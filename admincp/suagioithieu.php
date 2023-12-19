<?PHP
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
       Admin Page
    </title>
    <style> 
        img {
             width: 100%;
             height: 80%;
        }
        td,th {
            width: 10%;
            height: 20%;
            border: 1px solid #000;
            text-align:center;
            background-color:#ccc;
        }
        table{
            margin-bottom:100px;
            margin-top:40px;
        }
        input,textarea,select{
            width: 100%;
            background-color:#ccc;
        }
        *{
        }
        body{
            background-color:#ccc !important;
            text-align:center;
        }
        a{
            color: darkblue;
            margin-left:15px;
        }
   </style>
</head>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
        include "config/connect.php";
        if(isset($_POST['submit']))
        {   
            $errors = array();
            if(!isset($_POST['noidung'])){
                $errors = 'noidung';
            } else {
               $noidung =  $_POST['noidung'];
            }

            if(empty($errors))
            {
                $query = "SELECT * FROM thongtin WHERE TenThongTin='gioithieu'";
                $result = mysqli_query($conn, $query);
                if ( mysqli_num_rows($result) > 0 ) {
                    $query_ud = "UPDATE thongtin SET NoiDung='{$noidung}' WHERE TenThongTin='gioithieu'";
                    $result_ud = mysqli_query($conn, $query_ud);
                    echo "<p class='results'> Lưu thành công </p>";
                } else {
                    $query_is = "INSERT INTO thongtin(TenThongTin, NoiDung) VALUES('gioithieu', '{$noidung}')";
                    $result_is = mysqli_query($conn, $query_is);
                    echo "<p class='results'> Lưu thành công </p>";
                }
            }
            else
            {
                $message = "<p class='results1'> Bạn hãy nhập đầy đủ thông tin </p>";
                // header("Location: gioi_thieu.php");
            }
        }
        ?>
        <?php 
            $query = "SELECT * FROM thongtin WHERE TenThongTin='gioithieu'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0 ) {
                extract( mysqli_fetch_array($result) );
            }
        ?>
        <form name="frmadd-video" method="post">
            <?php
            if(isset($message)){echo $message;}
            ?>
            <h2 style="color: red">Giới thiệu</h2>
            <div class="form-group">
                <label>Nội dung</label>
               <textarea name="noidung" id="noidung-gioithieu" class="form-control" style="height:500px;"> <?php echo isset($NoiDung) ? $NoiDung : ''  ?></textarea> 
                <?php
                if (isset($errors) && in_array('noidung',$errors))
                {
                    echo "<p class='results1' >Bạn hãy nhập giới thiệu</p>";
                }
                ?>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Lưu"/>
        </form>
    </div>
</div>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Zanado
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="../asset/images/logoss.jpg">
    <style>
    .top-bar {
        background-color: #000;
        height: 30px;
    }

    .list-unstyled {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        position: absolute;
        margin-left: 134%;
        width: 348px;

    }

    .list-unstyled a {
        color: #fff;
    }
    </style>
</head>

<body>
    <?php  include "../Back-enddevelopment/connect.php";?>
    <?php  
     function hienthidm(){
           include "../Back-enddevelopment/connect.php";
            $sql_dm ="SELECT * FROM danhmuc";
            $query_dm = mysqli_query($conn,$sql_dm);
            while($rowdm = mysqli_fetch_assoc($query_dm)){
                $madm = $rowdm['MaDM'];
                 echo 
                 '
                 <a class="dropdown-item" href="danhmuc.php?MaDM='.$madm.'">'. $rowdm['TenDM'] .'</a>
                 '; 
            }  
     }
     
            
          

    ?>
    <header>
        <div class="body">
            <div class="top-bar">

                <div class="col-xs-12 col-sm-6 top-bar-right pull-right">
                    <ul class="list-unstyled">
                        <li class="hidden-xs hidden-sm"><a href="lienhe.php">Liên hệ</a></li>
                        <li class="hidden-xs"><a href="bando.php"><i class="ti-map-alt"></i></a></li>
                        <li><a href="gioithieu.php">Giới thiệu</a></li>

                    </ul>
                </div>



            </div>
            <div class="top-header">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: 	#FF0000/*#639b33*/;">
                        <div class="logo mr-5">
                            <img src="../asset/images/logoss.jpg" width="120%" height="100%">
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto" style="font-size: 17px;">
                                <li class="nav-item active">
                                    <a class="nav-link text-white mr-2" href="./trangchu.php">Trang chủ<span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white mr-2" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sản phẩm
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="./aogame.php">Áo Đẹp</a>
                                        <a class="dropdown-item" href="./aowibu.php">Quần Đẹp</a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white mr-2" href="./tintuc.php">Tin tức</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white mr-2" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Danh mục
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <?php hienthidm()  ?>

                                    </div>
                                </li>


                                <li class="nav-item float-right">
                                    <a class="nav-link text-white mr-2" href="./giohang.php">Giỏ hàng</a>
                                </li>
                            </ul>
                            <form method="post" action="timkiem.php"  class="form-inline my-2 my-lg-0">

                                <input name="txttukhoa" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm"
                                    aria-label="Search"> </input>
                                <button  type="submit"  name="timkiem"> Tìm </button>
                            </form>
                             
                        
                            
                        </div>
                    </nav>
                </div>
            </div>
    </header>
</body>

</html>
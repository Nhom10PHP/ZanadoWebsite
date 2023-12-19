<?PHP session_start();
if (!isset($_SESSION['level'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản trị hệ thống</title>
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom template -->
    <link rel="stylesheet" type="text/css" href="css/custom_template.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top wrap-header-dasboard" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">QUẢN TRỊ HỆ THỐNG</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- <i class="fa fa-fw fa-user"></i> -->
                     Xin
                    chào: <?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?> <b
                            class="fa fa-fw fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.php">Thông tin</a>
                    </li>
                    <li>
                        <a href="doimatkhau.php">Đổi mật khẩu</a>
                    </li>

                    <li>
                        <a href="logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </li>
        </ul>
    <!-- </nav> -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?PHP
        include('sidebar.php');
        ?>

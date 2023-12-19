<?php
    $severname ="localhost";
    $username = "root";
    $database = "quanlyshop";
    $password = "";

    $conn = mysqli_connect($severname,$username,$password,$database);
    if($conn)
    echo "";
    else {echo "Ket noi that bai"; exit();}
     mysqli_set_charset($conn,"utf8"); 
    ?>
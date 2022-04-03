<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "user";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "koneksi berhasil";
    }
    else{
        // echo "error";
    }

?>
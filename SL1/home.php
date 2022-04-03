<?php 
    session_start(); 
    include("config.php");
    $username = $_SESSION['username'];
    $str_query = "select*from datauser where username='$username'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
    $depan = $data['namaDepan'];
    $tengah = $data['namaTengah'];
    $belakang = $data['namaBelakang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div class="title">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="link">
            <a href="home.php"> home </a>
            <a href='profile.php'> profile </a>
            <a href="login.php">LOGOUT</a>
        </div>
    </div>
    <div class="content">
        Halo <?php echo $depan." ".$tengah." ".$belakang ?>, Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>

</body>
</html>
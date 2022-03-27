<?php
    session_start();
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
        <?php
            if(isset($_SESSION['usernameSession'])!=""){
        ?>
            Halo <?php echo $_SESSION['depanSession']." ".$_SESSION['tengahSession']." ".$_SESSION['belakangSession'] ?>, Selamat datang di Aplikasi Pengelolaan Keuangan
        <?php
            }
            else{
                echo "<h1>Halo Selamat Datang, Silahkan login telebih dahulu</h1>";
            }
        ?>
    </div>

</body>
</html>
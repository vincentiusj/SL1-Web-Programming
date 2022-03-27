<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Register</title>
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
    <div class="tabel">
        <table>
            <caption>Register<caption>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo $_SESSION['usernameSession'] ?></td>
                <td>Nama Tengah</td>
                <td><?php echo $_SESSION['tengahSession']; ?></td>
                <td>Nama Belakang</td>
                <td><?php echo $_SESSION['belakangSession']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $_SESSION['tempatSession']; ?></td>
                <td>Tgl Lahir</td>
                <td><?php echo $_SESSION['tanggalSession']; ?></td>
                <td>NIK</td>
                <td><?php echo $_SESSION['nikSession']; ?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><?php echo $_SESSION['wargaSession']; ?></td>
                <td>Email</td>
                <td><?php echo $_SESSION['emailSession']; ?></td>
                <td>No HP</td>
                <td><?php echo $_SESSION['hpSession']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $_SESSION['alamatSession']; ?></td>
                <td>Kode Pos</td>
                <td><?php echo $_SESSION['posSession']; ?></td>
                <td>Foto Profil</td>
                <td><img src="upload/<?php echo $_SESSION["fotoSession"]?>" width ="300px"></td>
            </tr>
        </table>
    </div>
</body>
</html>
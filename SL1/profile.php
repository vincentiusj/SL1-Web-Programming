<?php 
    session_start(); 
    include("config.php");
    $username = $_SESSION['username'];
    $str_query = "select*from datauser where username='$username'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
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
            <caption>Profile <a href="editProfile.php">edit</a><caption>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo $data['namaDepan']; ?></td>
                <td>Nama Tengah</td>
                <td><?php echo $data['namaDepan']; ?></td>
                <td>Nama Belakang</td>
                <td><?php echo $data['namaBelakang']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $data['tempatLahir']; ?></td>
                <td>Tgl Lahir</td>
                <td><?php echo $data['tanggalLahir']; ?></td>
                <td>NIK</td>
                <td><?php echo $data['nik']; ?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><?php echo $data['wargaNegara']; ?></td>
                <td>Email</td>
                <td><?php echo $data['email']; ?></td>
                <td>No HP</td>
                <td><?php echo $data['noHp']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $data['alamat']; ?></td>
                <td>Kode Pos</td>
                <td><?php echo $data['kodePos']; ?></td>
                <td>Foto Profil</td>
                <td><img src="<?php echo $data["fotoProfil"]?>" width ="300px"></td>
            </tr>
        </table>
    </div>
</body>
</html>
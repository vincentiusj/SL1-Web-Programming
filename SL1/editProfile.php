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
    <link rel="stylesheet" href="register.css">
    <title>Edit Profile</title>
</head>
<body>
    <form action="editProses.php" method="post" enctype="multipart/form-data">
    <div class="tabel">
        <table>
            <caption>Edit Profile<caption>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="NamaDepan" value="<?php echo $data['namaDepan'];?>" readonly></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="NamaTengah" value="<?php echo $data['namaTengah'];?>" readonly></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="NamaBelakang" value="<?php echo $data['namaBelakang'];?>" readonly></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="TempatLahir" value="<?php echo $data['tempatLahir'];?>"></td>
                <td>Tgl Lahir</td>
                <td><input type="date" name="TanggalLahir" value="<?php echo $data['tanggalLahir'];?>"></td>
                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $data['nik'];?>"></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="WargaNegara" value="<?php echo $data['wargaNegara'];?>"></td>
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo $data['email'];?>"></td>
                <td>No HP</td>
                <td><input type="text" name="NoHP" value="<?php echo $data['noHp'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" style="height:50px;" value="<?php echo $data['alamat'];?>"></td>
                <td>Kode Pos</td>
                <td><input type="text" name="KodePos"  value="<?php echo $data['kodePos'];?>"></td>
                <td>Foto Profil</td>
                <td><img src="<?php echo $data["fotoProfil"]?>" width ="300px">
                    <input type="file" name="fotoProfil"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name = "submit"></td>
                <td><a href="profile.php">kembali</a></td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>
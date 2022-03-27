<?php
session_start();
$nameErr = $wargaErr = $tempatErr = $tanggalErr = $userErr = $passErr = $nikErr = $emailErr = $hpErr = $alamatErr = $posErr = $fotoErr = "";
$name1 = $name2 = $name3 = $warga = $nik = $email = $hp = $alamattest = $pos = $fotoProfil = $tempat = $tanggal = $password1 = $password2 = $username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nameErr = $wargaErr = $tempatErr = $tanggalErr = $userErr = $passErr = $nikErr = $emailErr = $hpErr = $alamatErr = $posErr = $fotoErr = "";
  $name1 = test_input($_POST["NamaDepan"]);
  $name2 = test_input($_POST["NamaDepan"]);
  $name3 = test_input($_POST["NamaDepan"]);
  $warga = test_input($_POST["WargaNegara"]);
  if (empty(test_input($_POST["NamaDepan"])) || empty(test_input($_POST["NamaTengah"])) || empty(test_input($_POST["NamaBelakang"])) || empty(test_input($_POST["WargaNegara"]))) {
    $nameErr = "Field is required";
  } else {
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name1)) {
      $nameErr = "Only letters and white space allowed";
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name2)) {
      $nameErr = "Only letters and white space allowed";
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name3)) {
      $nameErr = "Only letters and white space allowed";
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$warga)) {
      $wargaErr = "Only letters and white space allowed";
    }
  }

  $tempat = $_POST["TempatLahir"];
  if (empty(test_input($_POST["TempatLahir"]))) {
    $tempatErr = "Field is required";
  }

  $tanggal = $_POST["TanggalLahir"];
  if (empty(test_input($_POST["TanggalLahir"]))) {
    $tanggalErr = "Field is required";
  }

  $nik = test_input($_POST["NIK"]);
  if (empty(test_input($_POST["NIK"]))) {
    $nikErr = "Field is required";
  }
  else{
    if(!preg_match("/^[0-9]*$/", $nik)){
      $nikErr = "Only numbers allowed";
    }
  }

  $email = test_input($_POST["Email"]);
  if (empty(test_input($_POST["Email"]))) {
    $emailErr = "Field is required";
  }
  else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  $hp = test_input($_POST["NoHP"]);
  if (empty(test_input($_POST["NoHP"]))) {
    $hpErr = "Field is required";
  }
  else{
    if(!preg_match("/^0[0-9]*$/", $hp)){
      $hpErr = "wrong format";
    }
  }

  $alamattest = test_input($_POST["Alamat"]);
  if (empty(test_input($_POST["Alamat"]))) {
    $alamatErr = "Field is required";
  }
  else{
    if(!preg_match("/^[a-zA-Z]*[0-9]*$/", $alamattest)){
      $alamatErr = "wrong format";
    }
  }

  $pos = test_input($_POST["KodePos"]);
  if (empty(test_input($_POST["KodePos"]))) {
    $posErr = "Name is required";
  } 
  else{
    if(!preg_match("/^[0-9]{5}$/", $pos)){
      $posErr = "wrong format";
    }
  }

  $fotoProfil = $_FILES["fotoProfil"];
  if (!$fotoProfil["tmp_name"]) {
    $fotoErr = "Field is required";
  }
  else{
    if(!getimagesize($fotoProfil["tmp_name"])){
      $fotoErr = "wrong format";
    }
  } 

  $username = test_input($_POST["username"]);
  if (empty(test_input($_POST["username"]))) {
    $userErr = "username is required";
  } 
  else{
    if(!preg_match("/^[a-zA-Z]*$/", $username)){
      $posErr = "Only letters allowed";
    }
  }

  $password1 = test_input($_POST["Pass1"]);
  $password2 = test_input($_POST["Pass2"]);
  if (empty(test_input($_POST["Pass1"])) || empty(test_input($_POST["Pass2"]))) {
    $passErr = "password is required";
  } 
  else{
    if($password1 != $password2){
      $passErr = "passwords dont match";
    }
  }
}

$username = $password = $warga = $nik = $email = $hp = $alamattest = "";
if(isset($_POST['Register']) && $nameErr == "" && $wargaErr == "" && $tempatErr == "" && $tanggalErr == "" && $userErr == "" && $passErr == "" && $nikErr == "" && $emailErr == "" && $hpErr == "" && $alamatErr == "" && $posErr == "" && $fotoErr == ""){
  // echo "halo lusia kintanswari";
  $username = $_POST["username"];
  $password = $_POST['Pass1'];
  $warga = $_POST['WargaNegara'];
  $nik = $_POST['NIK'];
  $email = $_POST['Email'];
  $hp = $_POST['NoHP'];
  $namaDepan = $_POST['NamaDepan'];
  $namaTengah = $_POST['NamaTengah'];
  $namaBelakang = $_POST['NamaBelakang'];
  $alamattest = $_POST['Alamat'];
  $tempat = $_POST['TempatLahir'];
  $tanggal = $_POST['TanggalLahir'];
  $pos = $_POST['KodePos'];
  $fotoProfil = $_FILES['fotoProfil']['name'];
  $tempName = $_FILES['fotoProfil']['tmp_name'];

  $dirTujuan = "upload/";

  $upload = move_uploaded_file($tempName, $dirTujuan.$fotoProfil);

  $_SESSION['usernameSession'] = $username;
  $_SESSION['passwordSession'] = $password;
  $_SESSION['depanSession'] = $namaDepan;
  $_SESSION['tengahSession'] = $namaTengah;
  $_SESSION['belakangSession'] = $namaBelakang;
  $_SESSION['tempatSession'] = $tempat;
  $_SESSION['tanggalSession'] = $tanggal;
  $_SESSION['nikSession'] = $nik;
  $_SESSION['wargaSession'] = $warga;
  $_SESSION['emailSession'] = $email;
  $_SESSION['hpSession'] = $hp;
  $_SESSION['alamatSession'] = $alamattest;
  $_SESSION['posSession'] = $pos;
  $_SESSION['fotoSession'] = $fotoProfil;

    // echo $_SESSION['usernameSession'];

  header("location:index.php");
}

if(isset($_POST['Kembali'])){
  header("location:index.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <div class="tabel">
        <table>
            <caption>Register<caption>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="NamaDepan" value="<?php echo $name1;?>"><span class="error" style="font-size:15px;">* <?php echo $nameErr;?></span></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="NamaTengah" value="<?php echo $name2;?>"><span class="error" style="font-size:15px;">* <?php echo $nameErr;?></span></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="NamaBelakang" value="<?php echo $name3;?>"><span class="error" style="font-size:15px;">* <?php echo $nameErr;?></span></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="TempatLahir" value="<?php echo $tempat;?>"><span class="error" style="font-size:15px;">* <?php echo $tempatErr;?></span></td>
                <td>Tgl Lahir</td>
                <td><input type="date" name="TanggalLahir" value="<?php echo $tanggal;?>"><span class="error" style="font-size:15px;">* <?php echo $tanggalErr;?></span></td>
                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $nik;?>"><span class="error" style="font-size:15px;">* <?php echo $nikErr;?></span></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="WargaNegara" value="<?php echo $warga;?>"><span class="error" style="font-size:15px;">* <?php echo $nameErr;?></span></td>
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo $email;?>"><span class="error" style="font-size:15px;">* <?php echo $emailErr;?></span></td>
                <td>No HP</td>
                <td><input type="text" name="NoHP" value="<?php echo $hp;?>"><span class="error" style="font-size:15px;">* <?php echo $hpErr;?></span></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" style="height:50px;" value="<?php echo $alamattest;?>"><span class="error" style="font-size:15px;">* <?php echo $alamatErr;?></span></td>
                <td>Kode Pos</td>
                <td><input type="text" name="KodePos"  value="<?php echo $pos;?>"><span class="error" style="font-size:15px;">* <?php echo $posErr;?></span></td>
                <td>Foto Profil</td>
                <td><input type="file" name="fotoProfil"><span class="error" style="font-size:15px;" value="<?php echo $fotoProfil;?>">* <?php echo $fotoErr;?></span></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"><span class="error" style="font-size:15px;">* <?php echo $nameErr;?></span></td>
                <td>Password 1</td>
                <td><input type="password" name="Pass1" value="<?php echo $password1;?>"><span class="error" style="font-size:15px;">* <?php echo $passErr;?></span></td>
                <td>Password 2</td>
                <td><input type="password" name="Pass2" value="<?php echo $password2;?>"><span class="error" style="font-size:15px;">* <?php echo $passErr;?></span></td>
            </tr>
            <tr>
                <td><input type="submit" value="Kembali" name = "Kembali"></td>
                <td><input type="submit" name ="Register" value="Register"></td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>
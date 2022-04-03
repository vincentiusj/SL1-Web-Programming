<?php
    session_start();
    include("config.php");
    if(isset($_POST['submit'])){
        $fotoProfil = $_FILES['fotoProfil']['name'];
        $tempName = $_FILES['fotoProfil']['tmp_name'];
        
      
        $dirTujuan = "upload/";
      
        $upload = move_uploaded_file($tempName, $dirTujuan.$fotoProfil);
        echo $_POST['TempatLahir'];
        $str_query = "update datauser set tempatLahir ='".$_POST['TempatLahir']."', tanggalLahir='".$_POST['TanggalLahir']."',
        `nik` ='".$_POST['NIK']."', wargaNegara='".$_POST['WargaNegara']."', email='".$_POST['Email']."', `noHp`='".$_POST['NoHP']."',
        alamat = '".$_POST['Alamat']."', `kodePos` = '".$_POST['KodePos']."', fotoProfil='".$dirTujuan.$fotoProfil."'
         where username='".$_SESSION['username']."'";
        // $str_query = "update datauser set tempatLahir='".$_POST['TempatLahir']."', tanggalLahir='".$_POST['TanggalLahir']."', `nik`='".$_POST['NIK']."', wargaNegara='".$_POST['WargaNegara']."', email='".$_POST['Email']."',  noHp='".$_POST['NoHP']."', alamat='".$_POST['Alamat']."', kodePos='".$_POST['KodePos']."', fotoProfil='".$dirTujuan.$fotoProfil."', where username='".$_SESSION['username']."'";
        $query = mysqli_query($connection, $str_query);
        echo mysqli_affected_rows($connection);
        header("location:profile.php");
    }
?>
<?php
    session_start();
    include("config.php");
    // var_dump($_POST);
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $str_query = "select*from datauser where username='$username'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
        // var_dump($data);
        // echo $_POST['password']."-".$data['password'];
        if($_POST['password']==$data['password']){
            $_SESSION["username"] = $data['username'];
            header("location:home.php");
        }
        else{
            header("location:login.php");
        }
        
    }
    if(isset($_POST['kembali'])){
        // header("location:index.php");
    }
?>
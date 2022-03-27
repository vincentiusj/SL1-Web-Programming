<?php
    session_start();
    if(isset($_POST['login'])){
        if($_POST['username']==$_SESSION['usernameSession'] && $_POST['password']==$_SESSION['passwordSession']){
            // echo $_POST['username']."-";
            // echo $_POST['password']."-";
            // echo $_SESSION['usernameSession']."-";
            // echo $_SESSION['passwordSession'];
            header("location:home.php");
        }
        else{
            header("location:login.php");
        }
    }
    if(isset($_POST['kembali'])){
        header("location:index.php");
    }
?>
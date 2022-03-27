<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <form action="loginproses.php" method="post">
    <div class="tabel">
        <table>
            <caption>Login<caption>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
            <td></td<>
            <td>
                <input type="submit" name="login" value="Login">
            </td>
            <td>
                <input type="submit" name="kembali" value="Kembali">
            </td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>
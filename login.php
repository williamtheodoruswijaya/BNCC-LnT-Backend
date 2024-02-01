<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class = "login-box">
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>

<?php
    if(isset($_POST['login'])){
        htmlspecialchars($username = $_POST['username']);
        htmlspecialchars($password = $_POST['password']);
        if(empty($_POST['username'])){
            echo "Username tidak boleh kosong";
        }
        else if(empty($_POST['password'])){
            echo "Password tidak boleh kosong";
        }

        if($username == "admin" && $password == "admin"){
            header("Location: admin.php");
        }
        else{
            echo("Username atau password salah");
        }
    }
?>
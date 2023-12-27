<?php
include("../connection/connect.php");
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ../Authentication/loginSucces.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $stmt->execute(array(':email' => $email, ':password' => $password));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($user) {
        $_SESSION['username'] = $user['username'];

        if ($user["is_admin"]) {
            header("Location: ../admin-panel/index.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <title>Login Pages</title>
</head>
<body>
    
    <a href="../index.php" class="back-link"><i class="fa fa-close" style="color: #ffffff;"></i></a>
    <div class="container">    
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
                <p class="forgot-pass-text"><a href="../authentication/forgotPass.php"> Forgot Password?</a></p>
            </div>
            
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            
            <p class="login-register-text">Don't have account?<a href="../authentication/regist.php"> Register now</a></p>
        </form>
    </div>
</body>
</html>

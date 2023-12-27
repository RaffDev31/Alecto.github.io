<?php
include("../connection/connect.php");
session_start();

$username = $email = $password = $cpassword = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            echo "<script>alert('Congratulations, registration successful!')</script>";
            $username = "";
            $email = "";
        } else {
            echo "<script>alert('Woops! Something went wrong.')</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match')</script>";
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
    <title>Register Pages</title>
</head>
<body>
    <a href="../index.php" class="back-link"><i class="fa fa-close" style="color: #ffffff;"></i></a>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 600;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required minlength="8">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="" required minlength="8">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Do you already have an account? <a href="../authentication/login.php">Login</a></p>
        </form>
    </div>
</body>
</html>

<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_SESSION['users'][$email])) {

        if ($_SESSION['users'][$email]['password'] === $password) {
            $_SESSION['Lemail'] = $email; 
            header("Location: loginvalid.php");
            exit;
        } else {
            echo "<p style='color:red;'>Incorrect password. Please try again.</p>";
        }
    } else {
        echo "<p style='color:red;'>No user found with this email. Please register first.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>

        <button type="submit" name="submit">Log In</button><br>
    </form>

    <form action="reg.php" method="get">
        <button type="submit">Register</button>
    </form>
</body>
</html>


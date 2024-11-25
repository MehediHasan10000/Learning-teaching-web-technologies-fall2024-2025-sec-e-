<?php
session_start();

if (empty($_SESSION['name']) || empty($_SESSION['email']) || empty($_SESSION['password']) || empty($_SESSION['phone']) || empty($_SESSION['gender'])) {
    header("Location: reg.php");
    exit; 
}

if (isset($_POST['log_in'])) {
    header("Location: login.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
</head>
<body>
    <h2>Registration Successful</h2><br>
    <form action="" method="POST">
        <button type="submit" name="log_in">LOG IN</button>
    </form>
</body>
</html>

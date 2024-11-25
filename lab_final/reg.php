<?php
session_start();


if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];  
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    if (empty($name) || empty($email) || empty($password) || empty($phone) || empty($gender)) {
        echo "<p style='color:red;'>All fields are required!</p>";
    } else {
        
        $_SESSION['users'][$email] = [
            'name' => $name,
            'password' => $password,  
            'phone' => $phone,
            'gender' => $gender
        ];
        echo "<p style='color:green;'>Registration successful! You can now log in.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password"><br>

        <label for="phone">Phone</label><br>
        <input type="text" name="phone"><br>

        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other<br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "");
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // Check user in the database
    $sql = "SELECT * FROM authors WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        echo "Login successful! Welcome, " . $user['author_name'];
    } else {
        echo "Invalid username or password.";
    }
    mysqli_close($conn);
}
?>
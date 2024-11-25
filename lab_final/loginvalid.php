<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['Lemail'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Welcome, " . $_SESSION['users'][$_SESSION['Lemail']]['name'] . "!</h2>";
?>

<a href="logout.php">Log Out</a>

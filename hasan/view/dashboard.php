<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="author_crud.php">Manage Authors</a><br>
<a href="logout.php">Logout</a>

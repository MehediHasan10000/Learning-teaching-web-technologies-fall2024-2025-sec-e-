<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Add Author
if (isset($_POST['add_author'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO authors (name, username, password) VALUES (:name, :username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'username' => $username, 'password' => $password]);
}

// Delete Author
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM authors WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}

// Fetch Authors
$sql = "SELECT * FROM authors";
$stmt = $conn->query($sql);
$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Manage Authors</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Author Name" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="add_author">Add Author</button>
</form>

<h3>Authors List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Action</th>
    </tr>
    <?php foreach ($authors as $author): ?>
        <tr>
            <td><?php echo $author['id']; ?></td>
            <td><?php echo $author['name']; ?></td>
            <td><?php echo $author['username']; ?></td>
            <td><a href="?delete=<?php echo $author['id']; ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="dashboard.php">Back to Dashboard</a>

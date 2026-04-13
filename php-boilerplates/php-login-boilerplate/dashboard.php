<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome to Dashboard</h1>
<p>Hello, <?php echo $_SESSION["user"]; ?>!</p>
<a href="logout.php">Logout</a>
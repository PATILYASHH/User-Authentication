<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<link rel="stylesheet" href="../assets/styles.css">
<h1>Welcome to the Dashboard!</h1>
<p>You are successfully logged in.</p>
<a href="logout.php">Logout</a>

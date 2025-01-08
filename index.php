<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: pages/welcome.php');
    exit;
} else {
    header('Location: pages/login.php');
    exit;
}
?>

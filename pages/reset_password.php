<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $new_password = password_hash(trim($_POST['new_password']), PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = :new_password WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['new_password' => $new_password, 'email' => $email]);

    echo "Password reset successfully! <a href='login.php'>Login</a>";
}
?>
<link rel="stylesheet" href="../assets/styles.css">
<form method="post">
    <h2>Reset Password</h2>
    <input type="email" name="email" placeholder="Registered Email" required>
    <input type="password" name="new_password" placeholder="New Password" required>
    <button type="submit">Reset Password</button>
</form>

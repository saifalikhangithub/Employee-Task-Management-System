<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to User Management System</title>
</head>
<body>
    <h1>Welcome to the User Management System</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Hello, <?php echo $_SESSION['user_name']; ?>! You are logged in.</p>
        <a href="user.php">Go to Your Page</a><br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>You are not logged in.</p>
        <a href="login.php">Login</a><br>
        <a href="register.php">Register</a>
    <?php endif; ?>


    <br><br><br><a style="float: right;" href="Admin/index.php">Admin</a>
</body>
</html>

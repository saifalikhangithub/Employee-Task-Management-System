<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['submit'])) {
    $option = mysqli_real_escape_string($conn, $_POST['task-progress']);
    $update = "UPDATE users SET task_progress = '$option' WHERE id = '$user_id'";
    
    if (mysqli_query($conn, $update)) {
        echo '<script>alert("Successful");</script>';
        header("Location: user.php");  // Redirect to the same page to reflect the changes
        exit();
    } else {
        echo "Error: " . $update . "<br>" . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Department: <?php echo htmlspecialchars($user['department']); ?></p>
    <a href="logout.php">Logout</a> <br><br>

    Your Task<br><textarea name="task" id="task" cols="100" rows="10" disabled><?php echo htmlspecialchars($user['the_task']); ?></textarea><br>
    
    <p>Current Task Progress: <?php echo htmlspecialchars($user['task_progress']); ?></p>

    <form action="user.php" method="post">
        <select name="task-progress" id="task-progress" required>
            <option value="" selected disabled>Task Progress</option>
            <option value="Not Started">Not Started</option>
            <option value="In Process">In Process</option>
            <option value="Finished">Finished</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

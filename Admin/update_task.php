<?php
include_once('db.php');
$the_task = '';

if (isset($_GET['update_id'])) {
    $id = $_GET['update_id'];

    $query = "SELECT the_task FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $the_task = $row['the_task'];
    } else {
        echo "Task not found.";
    }

    if (isset($_POST['submit'])) {
        $new_task = mysqli_real_escape_string($conn, $_POST['task_update']);
        $sql = "UPDATE users SET the_task = '$new_task' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Successful")</script>';
            echo '<script>window.open("database.php", "_self");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "No update_id provided.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
</head>
<body>
    <form action="update_task.php?update_id=<?php echo $id; ?>" method="post">
        <textarea name="task_update" id="task_update" required cols="100" rows="10"><?php echo $the_task; ?></textarea><br>
        <input type="submit" name="submit" value="Update Task">
    </form>
</body>
</html>

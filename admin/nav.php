<?php
include 'CRUD/connection.php';

$email = $_SESSION['admin_email'];
$sql = "SELECT * FROM admins WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$_SESSION['Name'] = $row['Name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <nav>
        <a href="dashboard.php"><img src="images/logo.png"></a>
        <h3>Admin Panel</h3>
        <ul>
            <li><span><?php echo $_SESSION['Name']; ?></span></li>
        </ul>
    </nav>

    <div class="list">
        <div class="left">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="lessons.php">Lessons</a></li>
                <li><a href="feedbacks.php">Feedbacks</a></li>
                <li><a href="uploadsong.php">Upload Song Tutorials</a></li>
                <button onclick="location.href='logout.php'" class="logout">LOGOUT</button>
            </ul>
        </div>
</body>
</html>
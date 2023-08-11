<?php
session_start();
include 'CRUD/connection.php';
if (!isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}

$email = $_SESSION['admin_email'];
$sql = "SELECT * FROM admins WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($result);
$_SESSION['Name'] = $values['Name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
</head>
<body>
    <?php
    include  'nav.php';
    ?>

    <h2>DASHBOARD:</h2>

    <div class="users">
        <div class="u">
            <i class="fa-solid fa-users"></i>
            <div>
                <h5><?php
                    require 'CRUD/connection.php';
                    $query = "SELECT Id FROM users ORDER BY ID";
                    $result = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($result);

                    echo '<h5>' . $row . '</h5>';
                    ?></h5>
                <p>Total users</p>
            </div>
        </div>
        <div class="u">
            <i class="fa-solid fa-music"></i>
            <div>
                <h5><?php
                    require 'CRUD/connection.php';
                    $query = "SELECT Id FROM songtutorials ORDER BY ID";
                    $result = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($result);

                    echo '<h5>' . $row . '</h5>';
                    ?></h5>
                <p>Total Song Lessons</p>
            </div>
        </div>
        <div class="u">
            <i class="fa-solid fa-message"></i>
            <div>
                <h5><?php
                    require 'CRUD/connection.php';
                    $query = "SELECT Id FROM contactus ORDER BY ID";
                    $result = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($result);

                    echo '<h5>' . $row . '</h5>';
                    ?></h5>
                <p>Total Feedbacks</p>
            </div>
        </div>


        <div class="board">
            <table width="100%">
                <tr>
                    <td>Name:</td>
                    <td>Title:</td>
                    <td>Status:</td>
                    <td>Role:</td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="admindp/221439452_834703697439073_2368990944056231196_n.jpg" alt="No image">
                        <div class="details">
                            <h1>John Hang Rai</h1>
                            <p>j@gmail.com</p>
                        </div>
                    </td>
                    <td class="des">
                        <h1>Music Scales</h1>
                        <p>MS or M#</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Admin</p>
                    </td>
                </tr>

                <tr>
                    <td class="people">
                        <img src="admindp/279612321_1587779861593318_4831421619468006557_n.jpg" alt="No image">
                        <div class="details">
                            <h1>Shankhar Ghalan</h1>
                            <p>s@gmail.com</p>
                        </div>
                    </td>
                    <td class="des">
                        <h1>Music Scales</h1>
                        <p>MS or M#</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Admin</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
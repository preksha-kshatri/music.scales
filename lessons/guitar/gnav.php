<?php
session_start();
include '../../admin/CRUD/connection.php';
if(!isset($_SESSION['login'])){
	header('location:../../signin.php');
	exit;
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $values = mysqli_fetch_assoc($result);
    $_SESSION['Name'] = $values['Name'];
    $_SESSION['Id'] = $values['Id'];
    $_SESSION['Email'] = $values['Email'];
    $_SESSION['Profile'] = $values['Profile'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/gnav.css">
<body>
    <nav>
        <a href=""><img src="../../admin/images/logo.png"></a>
        <div id="nav_links" class="links">
            <ul>
                <li><a href="guitar.php">Guitar Lessons</a></li>
                <li onclick="display()"><img src="<?php echo '../../userdp/' .$_SESSION['Profile']; ?>" alt="No image"></li>
            </ul>
        </div>

        <div class="container" id="user_profile">
                <img src="<?php echo '../../userdp/' .$_SESSION['Profile']; ?>" alt="No image">
            <?php
            }
        ?>
            <div class="info">
                <h1>Username: <?php echo $_SESSION['Name']; ?></h1>
                <h2>Email: <?php echo $_SESSION['Email']; ?></h2>
                <button onclick="location.href='../../CRUD/logout.php'" class="logout">LOGOUT</button>
                <a href="../../CRUD/manage_profile.php">Manage profile settings</a>
            </div>
        </div>
    </nav>

    <script>
        function display(){
            var y = document.getElementById("user_profile");
            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }
    </script>
</body>
</html>
<?php
include 'admin/crud/connection.php';

$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Id'] = $row['Id'];
    $_SESSION['Name'] = $row['Name'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Profile'] = $row['Profile'];
?>

    <link rel="stylesheet" href="css/l-nav.css">
    <link rel="shortcut icon" href="../admin/images/L.png" type="image/x-icon">
    <script type="text/javascript" src="../js/nav.js"></script>
    <script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>
    <nav>
        <a href=""><img src="admin/images/logo.png"></a>
        <div id="nav_links" class="links">
            <i class="fa fa-times" onclick="hide()"></i>
            <ul>
                <li><a href="lessons.php">Lessons</a></li>
                <li onclick="display()"><img src="<?php echo 'userdp/' . $_SESSION['Profile']; ?>" alt="No image"></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="show()"></i>

        <div class="container" id="user_profile">
            <?php
            $userid = $_SESSION['Id'];

            $query = "SELECT Profile FROM users WHERE Id = $userid";
            $query_run = mysqli_query($conn, $query);
            $result = mysqli_num_rows($query_run);
            if (!$result == 0) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <img src="<?php echo 'userdp/' . $_SESSION['Profile']; ?>" alt="No image">
        <?php
                }
            }
        }
        ?>
        <div class="info">
            <h1>Username: <?php echo $_SESSION['Name']; ?></h1>
            <h1>Email: <?php echo $_SESSION['Email']; ?></h1>
            <button onclick="location.href='CRUD/logout.php'" class="logout">LOGOUT</button>
            <a href="CRUD/manage_profile.php">Manage profile settings</a>
        </div>
        </div>
    </nav>

    <script>
        var X = document.getElementById("nav_links");

        function show() {
            X.style.right = "0";
        }

        function hide() {
            X.style.right = "-200px";
        }

        function display() {
            var y = document.getElementById("user_profile");
            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }
    </script>
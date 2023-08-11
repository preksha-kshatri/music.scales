<?php
$msg = "";
session_start();
if (isset($_POST['submit'])) {
    $db = mysqli_connect("localhost", "root", "", "music");

    $email = $_POST['email'];

    $sql = "SELECT Id FROM users WHERE Email = '$email'";
    $result = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($result);
    if (!$values == 0) {
        $_SESSION['Id'] = $values['Id'];
        header('location:CRUD/fpassword.php');
    } else {
        $msg = "**User Not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgot.css">
    <script src="js/forgot.js"></script>
    <link rel="shortcut icon" href="admin/images/forgot.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h2>Forgot Password:</h2>
        <p id="msg">Enter correct information</p>
        <?php
        echo "<p style = 'color:red';>" . $msg . "</p>";
        ?>
        <form action="#" method="post">
            <input type="email" name="email" id="email" placeholder="Enter your email" onkeyup="evalid()" required> <br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>
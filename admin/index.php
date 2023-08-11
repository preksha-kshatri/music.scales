<?php
if (isset($_POST['submit'])) {
    //error array
    $err = [];

    if (isset($_POST['email']) && !empty($_POST['email'] && trim($_POST['email']))) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err['email'] = "Enter a Valid Email";
        }
    } else {
        $err['email'] = 'Please Enter your Email';
    }

    if (isset($_POST['password']) && !empty($_POST['password'] && trim($_POST['password']))) {
        $password = $_POST['password'];
        $encrypted_pass = md5($password);
    } else {
        $err['password'] = 'Please Enter your Password';
    }

    if (count($err) == 0) {
        require_once 'CRUD/connection.php';
        //query to select data using email, password and status
        $sql = "SELECT * FROM admins WHERE Email = '$email' AND Password = '$encrypted_pass' AND Status=1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $login = true;
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['admin_id'] = $row['Id'];
            $_SESSION['admin_name'] = $row['Name'];
            $_SESSION['admin_email'] = $row['Email'];

            // //redirect to dashboard
            header('location:dashboard.php');
        } else {
            $msg = 'No any Match Found';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="myform">
            <form action="#" method="post">
                <?php if (isset($msg)) { ?>
                    <p class="error_msg"><?php echo $msg ?></p>
                <?php } ?>

                <?php if (isset($_GET['err']) && $_GET['err'] == 1) { ?>
                    <p class="error_msg">Please Login to Continue</p>
                <?php } ?>
                <h2>ADMIN LOGIN</h2>
                <input type="text" name="email" id="email" placeholder="Admin Email" value="<?php echo isset($email) ? $email : '' ?>">
                <?php if (isset($err['email'])) { ?>
                    <span class="error"><?php echo $err['email'] ?></span>
                <?php } ?>
                <input type="password" name="password" id="password" placeholder="Password">
                <?php if (isset($err['password'])) { ?>
                    <span class="error"><?php echo $err['password'] ?></span>
                <?php } ?>
                <button name="submit">LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="images/maxresdefault.jpg" alt="No image" width="370px" height="240px">
        </div>
    </div>
</body>
</html>
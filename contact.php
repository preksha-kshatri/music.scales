<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="admin/images/R.png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <form action="CRUD/msg_insert.php" method="post"><center>
        <div class="contact_us">
            <h2>Contact Us:</h2>
        </div>
        <div class="f">
            <div class="input">
                <input type="text" name="uname" id="name" placeholder="Name" required> <br>

                <input type="email" name="uemail" id="email" placeholder="Email" required> <br>

                <input class="ta" type="text" name="msg" id="msg" placeholder="Message" required>
            </div>
            <button name="submit">Submit</button></center>
        </div>
    </form>
</body>
</html>
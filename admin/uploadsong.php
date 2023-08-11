<?php
session_start();
include 'CRUD/connection.php';
if (!isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}

$msg = "";
if (isset($_POST['submit'])) {
    $folder = "../lessons/song/tabs/" . basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost", "root", "", "music");
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $file_ext = explode('.', $image);
    $file_ext_check = strtolower(end($file_ext));

    $valid_file_ext = array('png', 'jpg', 'jpeg');
    if (in_array($file_ext_check, $valid_file_ext)) {
        $sql = "INSERT INTO songtutorials(Song_Tab, Title, Details) VALUES ('$image', '$title', '$text')";
        mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) {
            $msg = "**Uploaded";
        }
    } else {
        $msg = "**Not a valid extension i.e.(png, jpg, jpeg)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Song Tutorials</title>
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .songtab {
            flex: 8;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 80px;
        }

        .songtab h2 {
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
            letter-spacing: 1px;
            font-size: 30px;
            text-decoration: underline;
        }

        .songtab form {
            position: absolute;
            top: 40%;
            left: 52%;
        }

        .songtab input {
            margin-bottom: 10px;
        }

        input[type=file]::file-selector-button {
            width: 210px;
            height: 100px;
            border: 1px dashed gray;
            color: #f0f0f0;
        }

        p {
            position: absolute;
            top: 6%;
            font-size: 14px;
            text-align: center;
            left: 13%;
            font-weight: 500;
        }

        input[type=text] {
            width: 206px;
        }

        input[type=submit] {
            width: 120px;
            height: 40px;
            border-radius: 22px;
            background-color: #4ea4dd;
            color: white;
            font-size: 16px;
            font-weight: 500;
            transition: 0.4s;
            position: absolute;
            left: 16%;
        }

        input[type=submit]:hover {
            background-color: #66ccff;
            color: black;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    ?>

    <div class="songtab">
        <h2>Upload Song Tab:</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div>
                <input type="file" name="image" required>
                <p>Click to upload Files.</p> <br>
                <input type="text" name="title" id="title" placeholder="Song Title" required> <br>
                <textarea name="text" cols="30" rows="10" placeholder="Song Details" required></textarea> <br>
                <input type="submit" value="Upload" name="submit"> <br> <br>
                <?php
                echo '<h4>' . $msg . '</h4>';
                ?>
            </div>
        </form>
    </div>
</body>

</html>
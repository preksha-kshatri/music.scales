<?php
session_start();
include 'CRUD/connection.php';
if (!isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Lessons</title>
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .lessons {
            flex: 8;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        .L {
            height: 460px;
            width: 300px;
            padding: 20px;
            margin: 10px;
            overflow: hidden;
            border: 2px solid black;
            border-radius: 22px;
        }

        .L h2 {
            font-size: 22px;
            text-align: center;
            font-weight: 500;
            text-decoration: underline;
            margin-bottom: 8px;
        }

        .L th {
            border-bottom: 1px solid gray;
            border-top: 1px solid gray;
            border-right: 1px solid gray;
            padding-bottom: 10px;
            font-size: 18px;
            font-weight: 500;
        }

        .L td {
            font-size: 16px;
            text-align: center;
            padding-bottom: 6px;
            border-bottom: 1px solid gray;
            border-right: 1px solid gray;
        }

        a {
            text-decoration: none;
            color: #4ea4dd;
        }

        a:hover {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    include 'nav.php';
    ?>

    <div class="lessons">
        <div class="L guitar">
            <h2>Guitar Lessons</h2>
            <table>
                <tr>
                    <th>S.N.</th>
                    <th>Lessons Name:</th>
                    <th>Actions:</th>
                </tr>
                <?php
                include '../CRUD/conn.php';

                $stmt = $pdo->query("SELECT * FROM guitarlessons");
                foreach ($stmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Video_Name'] ?></td>
                        <td><a href="CRUD/Gdelete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="L piano">
            <h2>Piano Lessons</h2>
            <table>
                <tr>
                    <th>S.N.</th>
                    <th>Lessons Name:</th>
                    <th>Actions:</th>
                </tr>
                <?php
                include '../CRUD/conn.php';

                $stmt = $pdo->query("SELECT * FROM pianolessons");
                foreach ($stmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Video_Name'] ?></td>
                        <td><a href="CRUD/Pdelete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="L song">
            <h2>Song Tutorials</h2>
            <table>
                <tr>
                    <th>S.N.</th>
                    <th>Title:</th>
                    <th>Actions:</th>
                </tr>
                <?php
                include '../CRUD/conn.php';

                $stmt = $pdo->query("SELECT * FROM songtutorials");
                foreach ($stmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Title'] ?></td>
                        <td><a href="CRUD/Sdelete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
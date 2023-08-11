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
    <title>Document</title>
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .feedback {
            flex: 8;
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .fct h2 {
            width: 100%;
            margin-bottom: 20px;
            text-align: center;
            letter-spacing: 1px;
            font-size: 30px;
            font-weight: 500;
            text-decoration: underline;
        }

        table {
            font-size: 20px;
            font-weight: 500;
        }

        table th,
        td {
            font-weight: 500;
            padding: 20px;
            text-align: left;
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

    <div class="feedback">
        <div class="fct">
            <h2>Users Comments & Feedbacks:</h2>
            <table>
                <tr>
                    <th>S.N.</th>
                    <th>Username:</th>
                    <th>Email:</th>
                    <th>Message:</th>
                    <th>Actions:</th>
                </tr>
                <?php
                include '../CRUD/conn.php';

                $stmt = $pdo->query("SELECT * FROM contactus");
                foreach ($stmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Message'] ?></td>
                        <td class="d"><a href="CRUD/Mdelete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
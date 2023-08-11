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
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/users.css">
    <link rel="shortcut icon" href="images/a.png" type="image/x-icon">
</head>
<body>
    <?php
    include  'nav.php';
    ?>

    <div class="content">
        <div class="ct">
            <h2>Manage Users</h2>
            <table>
                <tr>
                    <th>S.N.</th>
                    <th>Username:</th>
                    <th>Email:</th>
                    <th colspan="3">Actions:</th>
                </tr>
                <?php
                include '../CRUD/conn.php';

                $stmt = $pdo->query("SELECT * FROM users");
                foreach ($stmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td class="d"><a href="CRUD/delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
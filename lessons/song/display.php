<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Tabs</title>
    <script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/m.png" type="image/x-icon">
    <link rel="stylesheet" href="css/st.css">
</head>
<body>
    <?php
    include 'stnav.php';
    ?>
    <table>
        <div class="main-b">
            <a href="song_tutorials.php">GO BACK</a>
        </div>
        <tr>
            <th>S.N.</th>
            <th class="tt">Title/Song_Tab:</th>
            <th>Details:</th>
        </tr>
        <?php
            include '../../admin/CRUD/connection.php';

            $query = "SELECT * FROM songtutorials WHERE id = $id";
            $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($query_run)){
        ?>
        <tr class="bt">
            <td class="song_id"><?php echo $row['Id']; ?> <br>
			<td class="song_tab"><?php echo $row['Title']; ?> <br>
            <img id="tab" src="<?php echo 'tabs/' .$row['Song_Tab']; ?>"></td> <br>
            <td class="song_details"><?php echo $row['Details']; ?></td> <br>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
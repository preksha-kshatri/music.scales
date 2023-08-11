<?php
$msg = "";

include '../../admin/CRUD/connection.php';
if(isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^a-zA-z ]#i","",$searchq);

    $query = "SELECT * FROM songtutorials WHERE Title LIKE '%$searchq%'";
    $query_run = mysqli_query($conn,$query);
    $count = mysqli_num_rows($query_run);
    if($count == 0){
        $msg = "**No result found";
    }else{
        while($row = mysqli_fetch_array($query_run)){
            $Id = $row['Id'];
            $msg = "**Result found in S.N: $Id";
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
    <title>Song Tabs</title>
    <script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/m.png" type="image/x-icon">
    <link rel="stylesheet" href="css/st.css">
</head>
<body>
    <?php
    include 'stnav.php';
    ?>

    <form action="#" method="post">
        <div class="main">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" name="search" placeholder="Search songs">
            <input type="submit" value="Search" name=">>"> <br>
            <a href="../../lessons.php">ALL LESSONS CATEGORY</a> <br>
            <span>
                >> SEARCH RESULT:
                <?php
                echo $msg;
                ?>
            </span>
        </div>
    </form>

    <table>
        <tr>
            <p>Didn't Find the song that you were LOOKING for ???</p> <br>
            <button class="btn" onclick="location.href='../../contact.html'">REQUEST SONGS</button>
        </tr>
        <tr>
            <th>S.N.</th>
            <th class="tt">Title/Song_Tab:</th>
            <th>Details:</th>
        </tr>
        <?php
            include '../../admin/CRUD/connection.php';

            $query = "SELECT * FROM songtutorials";
            $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($query_run)){
        ?>
        <tr class="bt">
			<td class="song_id"><?php echo $row['Id']; ?></td>
			<td class="song_tab"><a href="display.php?id=<?php echo $row['Id'];?>"><?php echo $row['Title']; ?></a> <br> 
            <td class="song_details"><?php echo $row['Details']; ?></td> <br>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
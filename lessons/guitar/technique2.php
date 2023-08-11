<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'music');

$query = "SELECT * FROM guitarlessons WHERE Id=6";
$query_run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($query_run)) {
    $name = $row['Video_Name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technique 1</title>
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/lesson1.css">
</head>

<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>How To Bend Notes On Your Guitar</h1>
        <span class="fa">GUITAR TECHNIQUE LESSONS</span><span class="fb"> - LESSON 2/2</span>
        <button onclick="location.href='technique.php'">VIEW SERIES</button>
    </div>

    <div class="lesson">
        <center>
            <h1>What is Bending?</h1>
            <p>Bending notes is a big part of what makes the guitar such an expressive instrument with a nearly vocal quality. It's not a difficult technique to apply, but one that can take a lifetime to master. </p> <br>
            <h1>Featured Lesson:</h1>
            <p>To learn the basics of bending, here is a lesson by Nate Savage from Guitareo:</p>
            <div class="v">
                <video width="720px" height="430px" controls src="<?php echo 'videos/' . $name; ?>">
                </video>
            </div> <br>
            <h1>Important takeaways from the lesson are:</h1>
            <p>a. Use as many additional fingers as possible to help you push the bend to the proper pitch (0:30)</p> <br>
            <p>b. Anchor your thumb to the back of the neck to give your hand more leverage (1:20)</p> <br>
            <p>c. Bend towards the roof on high-string bends, and towards the floor on low string bends (1:50)</p> <br>
            <p class="bb">d. Make sure you are bending to the correct pitch by checking the targeted bend note with a fretted note (2:30)</p> <br>
            <p class="ba">Have more questions about sliding? <a href="../../contact.html">Contact us.</a></p>
    </div>
</body>

</html>
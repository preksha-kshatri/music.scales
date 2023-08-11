<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'music');

$query = "SELECT * FROM guitarlessons WHERE Id=7";
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
    <link rel="stylesheet" href="css/guitar_theory.css">
</head>

<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>8 Steps To Understand Music Theory</h1>
        <span class="fa">GUITAR THEORY</span><span class="fb"> - LESSON 1/1</span>
        <button onclick="location.href='music_theory.php'">VIEW SERIES</button>
    </div>

    <div class="lesson">
        <center>
            <div class="v">
                <video width="720px" height="430px" controls src="<?php echo 'videos/' . $name; ?>">
                    <source src="">
                </video>
            </div> <br>
            <p>Music theory is one of those topics many guitar players avoid. Guitarists are lucky because we have so many great tools out there that can help us to get around ever learning it. But in the long run, there are some essential concepts that can have a massive impact on your playing. In this video, we'll be teaching those key concepts.</p> <br>
            <p>Each one of these steps will build off of the previous ones. So feel free to pause the video and make sure you completely understand everything before moving to the next step. We'll start off by learning about pitch within an octave. From there, we'll learn about half-steps and whole-steps. After that, we'll go through many more music theory concepts, and by the end of the lesson, you'll fully understand how keys work and how to find the chords within them.</p> <br>
            <p>Spend some time each day working on these important music theory concepts. Don't worry about working on everything at once. Start with just a few, and as you master them you can move onto later steps.</p> <br>
            <p class="ba">Have more questions about Music Theory?<a href="../../contact.html"> Contact us.</a></p>
    </div>
</body>

</html>
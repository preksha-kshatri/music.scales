<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'db_ms');

$query = "SELECT * FROM guitarlessons WHERE Id=8";
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
    <title>EXERCISE 1</title>
    <link rel="stylesheet" href="css/caged.css">
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
</head>
<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>CAGED Major Scale Sequence</h1>
        <span class="fa">EXERCISES</span><span class="fb"> - LESSON 1/2</span>
        <button onclick="location.href='exercises.php'">VIEW SERIES</button>
        <button class="ba" onclick="location.href='picking.php'">NEXT LESSON >></button>
    </div>

    <div class="lesson">
        <center>
        <div class="v">
            <video width="720px" height="430px" controls src="<?php echo 'videos/' .$name; ?>">
            </video>
        </div> <br>
        <p>In this guitar lesson we are going to take a look at how to apply the major scale to the CAGED sequence. If you don’t know what the CAGED sequence is you should go check out the lesson The CAGED Guitar Sequence. We will be in the key of G major for this lesson and will be using two different major scale shapes. One of the shapes will start with your 2nd finger and the other will start with your 4th finger. You can check out the lesson Major Guitar Scale Shapes if you do not know the scale shapes that we are using in this lesson, or you can just learn them here.</p> <br>
        <p>The idea here is to associate each chord shape in the CAGED sequence with a scale shape. This will help you to learn how to start connecting major scale shapes up and down the fretboard. We will go through each chord in the CAGED sequence, starting with the E, and apply a G major scale shape to each chord.</p> <br>
        <p>Make a G bar chord with your bar on the 3rd fret using the E shape. Check out the chord diagram that we have supplied for you if you are not clear on which chord I am talking about. Now play a G major scale starting on the 3rd fret of the 6th string with your 2nd finger. This is the scale that goes with the E bar chord shape. We have given you the scale diagram if you need it.</p> <br>
        <p>The second chord in the CAGED sequence is a D. Check out the G chord diagram that is based off of the D shape. The G major scale shape that goes with this chord shape starts with your 2nd finger on the 5th fret of the 4th string. Check out the chord and scale diagrams if you need any clarification.</p> <br>
        <p>The next chord shape in the CAGED sequence is C. Play the chord diagram that looks like a C chord with the root note on the 10th fret of the 5th string. The G major scale that goes with this chord shape is the one that starts with your 4th finger on the 10th fret of the 5th string. Play through this scale and try to visualize the C shaped G chord inside of the scale shape.</p> <br>
        <p>The fourth scale shape is associated with an A bar chord shape. Play the G bar chord based off of the A chord shape with your bar on the 10th fret. Now play the scale shape that starts with your 2nd finger on the 10th fret of the 5th string.</p> <br>
        <p>The last chord in the CAGED sequence is a G. Check out the chord diagram. It is basically a G chord shape with a bar on the 12th fret. The scale shape that goes with this chord starts with your 4th finger on the 15th fret of the 6th string.</p> <br>
        <p>Play through each scale shape and try to visualize the chord shape within the scale. If you already know the CAGED sequence you can visualize the layout of all of the G chords on the fretboard. Try to associate each chord shape with scale shape that goes with it. Once you can do this for the key of G try it with all of the other keys. This can be a lot of work so try a new key every week or two.</p> <br>

        <img src="images/caged-sequence-major.gif" alt="No image" class="bb">
        <p class="ba">Next exercise is about picking.</p>
        <button onclick="location.href='picking.php'">NEXT EXERCISE - RIGHT HAND PICKING EXERCISE</button>
    </div>
</body>
</html>
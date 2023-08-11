<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'music');

$query = "SELECT * FROM guitarlessons WHERE Id=9";
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
    <title>EXERCISE 2</title>
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/picking.css">
</head>

<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>Right Hand Picking Exercise</h1>
        <span class="fa">EXERCISES</span><span class="fb"> - LESSON 2/2</span>
        <button onclick="location.href='exercises.php'">VIEW SERIES</button>
    </div>

    <div class="lesson">
        <center>
            <div class="v">
                <video width="720px" height="430px" controls src="<?php echo 'videos/' . $name; ?>">
                </video>
            </div> <br>
            <p>In this guitar lesson you will be learning two variations of an exercise that uses an A major pentatonic scale to help you work on your inside and outside of the string picking. Check out the A major pentatonic scale diagram. You should be pretty familiar with this shape before starting to work on these exercises. There are two versions of this exercise. The one that starts with an upstroke will focus on outside of the string picking and the one that starts with a downstroke will focus on inside of the string picking. We have given you the TAB for each exercise. Make sure to pay attention the up and downstroke indicators at the bottom of each line.</p> <br>
            <img src="images/right-hand-picking-exercise.jpg" alt="No image" class="bb">
            <p>Let's talk about what I mean when I say outside or inside of the string picking. Play the 2nd string with your pick using a downstroke. Now hop over to the 1st string and play it with an upstroke. Do you see how you had to hop over the 1st string in order to play it with an upstroke. This is outside of the string picking. Play 2nd string again but this time use an upstroke. Now play the 1st string with a downstroke. Do you see how your pick is kind of trapped between the 2nd and 1st strings. This is inside of the string picking.</p> <br>
            <p>Now that you understand outside and inside of the string picking it's time to dig in to these exercises. Play the 7th fret of the 1st string with your 4th finger using an upstroke. Play this note with the middle part of the first joint not the very tip of your finger. Now roll your 1st finger over to where the tip of your 1st finger is on the 7th fret of the 5th string. Play that note with a downstroke. Move to the 5th fret of the 1st string with your 2nd finger using an upstroke. Rock your 2nd finger over to the 5th fret of the 2nd string and play that note using a downstroke. This is the fundamental picking pattern that you will be using throughout this entire version of this exercise. Move over to the 2nd and 3rd strings and keep this pattern going. Play the 7th fret of the 2nd string with your 4th finger using an upstroke and then move to the 6th fret of the 3rd string with your 3rd finger using a downstroke. Now play the 5th fret of the 2nd string with your 2nd finger using an upstroke and the 4th fret of the 3rd string with your 1st finger using a downstroke. Continue this patter down the scale and then come back up. Check out the TAB if you are confused about the pattern.</p> <br>
            <p>It may take some time for you to build up the coordination in your hands necessary to play this exercise. Work on it slowly and make sure that you are following the TAB exactly. You should only have one string ringing out at any given time. Once you get this exercise down starting with an upstroke you should try starting it with a downstroke. This changes the feel for your picking hand quite dramatically.</p> <br>
    </div>
</body>

</html>
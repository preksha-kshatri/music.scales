<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'music');

$query = "SELECT * FROM guitarlessons WHERE Id=2";
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
    <title>Lesson 2</title>
    <link rel="stylesheet" href="css/lesson2.css">
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
</head>

<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>How To Hold The Guitar</h1>
        <span class="fa">BEGINNER GUITAR LESSONS</span><span class="fb"> - LESSON 2/5</span>
        <button onclick="location.href='beginner_guitar.php'">VIEW SERIES</button>
        <button class="ba" onclick="location.href='lesson3.php'">NEXT LESSON >></button>
    </div>

    <div class="lesson">
        <center>
            <p>Welcome to the second video in the Beginner Guitar Quick-Start Series. In this lesson, we're going to go over how to hold the guitar. Knowing how to hold the guitar will give you good posture and help you avoid suffering from injuries and fatigue. It also ensures that every practice you have goes as well as possible. We're going to talk about three basic ways to hold your guitar: the casual method, the classical method, and standing up with a strap.</p> <br>
            <div class="v">
                <video width="720px" height="430px" controls src="<?php echo 'videos/' . $name; ?>">
                </video>
            </div> <br>
            <h2>The Casual Method</h2>
            <p>If you're right-handed, set your guitar on your right leg. The first tip I have for you is to use a footstool. Footstools range from $15-20 in a music store, and I recommend getting one if you plan on holding your guitar based on the either the casual or classical method. The footstool elevates your leg and brings the guitar to a more comfortable position, especially when playing for long periods of time.</p> <br>
            <p>One mistake I see newer guitar players make when using the casual method is slouching the guitar in towards them. They do this so they can see their fingers, but this is bad for posture and practice time because it causes fatigue. Instead, be sure to place the guitar upright and straight.</p> <br>
            <p>The next tip I have for the casual method is to bring your strumming arm tightly around the guitar to keep it close to you. This prevents the guitar from slouching and keeps it in a good position to practice and play for longer periods of time.</p> <br>
            <h2>The Classical Method</h2>
            <p>If you're right-handed, place your left foot on the footstool and then rest your guitar on your left leg. This brings the neck of the guitar further to the left and elevates it more, which means it will be easier for you to reach all the notes on the fretboard.</p> <br>
            <p>The classical method of holding the guitar can be harder to play for longer periods of time, unless you're using a strap to help hold the guitar up, but it will be easier for you to reach all the notes.</p> <br>
            <h2>Standing With A Strap</h2>
            <p>You can buy a strap at any music store, starting from $7 right up to $200 for expensive leather straps. For a decent strap, expect to pay about $15-20, and it's a worthwhile investment.</p> <br>
            <p class="bb">It's best to practice in the same way you'll be performing, so if you're going to perform standing up, you should also stand up when you practice.</p> <br>
            <p class="ba">If you have any questions about this lesson, you can <a href="../../contact.html">contact us</a> for help. In the next lesson, we'll talk about the numbering systems for the guitar. We'll cover the system for your fingers, the strings on the guitar, and the frets on the guitar.</p>
            <button onclick="location.href='lesson3.php'">NEXT LESSON - FINGER, FRETS & STRINGS</button>
    </div>
</body>

</html>
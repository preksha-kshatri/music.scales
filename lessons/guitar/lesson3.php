<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'db_ms');

$query = "SELECT * FROM guitarlessons WHERE Id=3";
$query_run = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($query_run)){
    $name = $row['Video_Name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3</title>
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/lesson3.css">
</head>
<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>Fingers, Frets, & Strings</h1>
        <span class="fa">BEGINNER GUITAR LESSONS</span><span class="fb"> - LESSON 3/5</span>
        <button onclick="location.href='beginner_guitar.php'">VIEW SERIES</button>
        <button class="ba" onclick="location.href='lesson4.php'">NEXT LESSON >></button>
    </div>

    <div class="lesson">
        <center>
        <p>Welcome to video three in the Beginner Guitar Quick-Start Series. In this lesson, we're going to go over the 3 numbering systems for the guitar, including the system to use for your fingers, the frets on the guitar, and for the guitar strings. This lesson may seem very easy to you, but it's an important lesson. Knowing these systems inside and out makes all of your future guitar lessons a lot faster.</p> <br>
        <div class="v">
            <video width="720px" height="430px" controls src="<?php echo 'videos/' .$name;?>">
            </video>
        </div> <br>
        <h2>Fingers</h2>
        <p>Your index finger is your first finger, middle finger is your second finger, ring finger is your third finger, and your pinky is your fourth finger. I'm sure this seems simple to you, but when you begin reading chord diagrams, scale diagrams, tabs, and sheet music, you'll need to know which finger to use right away.</p> <br>
        <img src="images/BGQS-finger-numbers.png" alt="No image found"> <br>
        <h2>Frets</h2>
        <p>The frets on the guitar are the metal strips placed along the fretboard. The first fret is the metal strip closest to the headstock of the guitar, and then it counts up from there.</p> <br>
        <img src="images/BGQS-fret-numbers.png" alt="No image found">
        <h2>Strings</h2>
        <p>Most people think the string closest to them, the thickest string, is the first string of the guitar, but it's actually the opposite. The string closest to the floor, the thinnest string, is the first string. The next string up, the second thinnest string, is the second string, and so on from there. Just be aware that your thinnest string is the first string, and the thickest string is the sixth string.</p> <br>
        <img src="images/BGQS-string-numbers.png" alt="No image found">
        <p>The classical method of holding the guitar can be harder to play for longer periods of time, unless you're using a strap to help hold the guitar up, but it will be easier for you to reach all the notes.</p> <br>
        <h2>Putting It All Together</h2>
        <p>If someone told you to place your finger on the first fret, you would go to the first fret and place your finger right behind the fret. If they told you to go to the fifth fret on the first string with your first finger, you would count up five frets and place your first finger behind that fret on the thinnest string.</p> <br>
        <p>You'll want to test yourself on all the numbering systems so you can quickly go the fret you need on the right string and with the right finger. Take as much time as you need to get comfortable with all three systems by testing yourself, looking at tabs, and studying chords diagrams</p> <br>
        <p class="bb">Remember that knowing these systems really well will make all the other guitar lessons in the Beginner Guitar Quick-Start Series a lot faster, along with any other lessons you take later on.</p> <br>
        <p class="ba">In the next lesson, we're going to over the different parts of the guitar, including the headstock, the neck, and the body. If you have any questions, you can feel free to <a href="../../contact.html">contact us</a>.</p>
        <button onclick="location.href='lesson4.php'">NEXT LESSON - THE PARTS OF GUITAR</button>
    </div>
</body>
</html>
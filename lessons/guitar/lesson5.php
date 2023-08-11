<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'music');

$query = "SELECT * FROM guitarlessons WHERE Id=5";
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
    <title>Lesson 5</title>
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/lesson5.css">
</head>

<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>The Guitar String Names</h1>
        <span class="fa">BEGINNER GUITAR LESSONS</span><span class="fb"> - LESSON 5/5</span>
        <button onclick="location.href='beginner_guitar.php'">VIEW SERIES</button>
    </div>

    <div class="lesson">
        <center>
            <p>Welcome to video five in the Beginner Guitar Quick-Start Series. In this lesson, we're going to learn the names of the open strings on the guitar. When I first learned to play guitar, I avoided this for a long time because I didn't really have a good way to remember the names of the strings. This lesson is an important one because you'll soon be tuning your guitar, but also because you need to know the names as you start learning the notes up and down the guitar fretboard.</p> <br>
            <div class="v">
                <video width="720px" height="430px" controls src="<?php echo 'videos/' . $name; ?>">
                </video>
            </div> <br>
            <h2>Numbering The Strings</h2>
            <p>Let's quickly recap the numbering system for the strings of the guitar. The first string is the thinnest string, and you'll count the strings in order, so the thickest string is your sixth string. Like the numbering system for the strings, learning the names is a bit counterintuitive because most people learn the strings from the sixth string to the first string.</p> <br>
            <img src="images/BGQS-string-numbers.png" alt="No image found"> <br>
            <h2>The String Names</h2>
            <p>The name of the thickest string, the sixth string, is E. Moving on, the fifth string is A, fourth is D, third is G, second is B, and then the first string is E.</p> <br>
            <img src="images/BGQS-string-names.png" alt="No image found">
            <h2>Remembering The String Names</h2>
            <p>Now you're probably thinking there's no way you can remember all these strings, and that's what I thought when I started too. Eventually, I decided to come up with a silly saying to help me remember the names of the strings: Eat All Day, Go to Bed Early.</p> <br>
            <p class="bb">I'm sure this sounds silly to you, because it kind of is, but you can use any saying that helps you remember the string names. The other thing that will help you remember the names is realizing the outside two strings are both E, so you only have to remember the four strings on the inside.</p> <br>
            <p class="ba">Knowing the names of the strings by memory will help you out in future lessons, especially in the next lesson where we go over how to tune the guitar. If you have any questions, feel free to <a href="../../contact.html">contact us</a> for help.</p>
    </div>
</body>

</html>
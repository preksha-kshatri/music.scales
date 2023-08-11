<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'db_ms');

$query = "SELECT * FROM guitarlessons WHERE Id=1";
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
    <title>Lesson 1</title>
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/lesson1.css">
</head>
<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>Learn How To Play Guitar</h1>
        <span class="fa">BEGINNER GUITAR LESSONS</span><span class="fb"> - LESSON 1/5</span>
        <button onclick="location.href='beginner_guitar.php'">VIEW SERIES</button>
        <button class="ba" onclick="location.href='lesson2.php'">NEXT LESSON >></button>
    </div>

    <div class="lesson">
        <h1>Your First Step to Learning Guitar</h1>
        <center>
        <p>Welcome to the first video in the Beginner Guitar Quick-Start Series. I receive a lot of emails from people who want to learn how to play guitar but don't know where to start, and that's why I've made this series. This series of beginner guitar lessons is for people who have always wanted to play guitar, but just haven't done it yet.</p> <br>
        <div class="v">
            <video width="720px" height="430px" controls src="<?php echo 'videos/' .$name;?>">
            </video>
        </div> <br>
        <p>There are many people out there who doubt that they have the ability to play guitar, so let me tell you right away: your hands aren't too big or too small, you're not too young or too old, and it doesn't matter if you want to play electric or acoustic. Everyone has their own challenges, but I'm confident that if you practice and put your mind to it, you can play the guitar.</p> <br>
        <p>Throughout the Beginner Guitar Quick-Start Series, we'll include the most important things you need to know be successful at playing guitar right away. First we'll cover basics like how to tune your guitar, how to hold your guitar, and the parts of the guitar. After that, we'll get into technique, how to strum, how to make your first chords, and how to play your first song.</p> <br>
        <p class="bb">By the end of these 12 lessons, you'll know how to hold the guitar, identify the parts of the acoustic and electric guitar, tune the guitar, play four important guitar chords, strum the guitar, and even combine all these things to play your very first song. Getting into playing music right away is going to be great motivation to get you going. Once you've completed these lessons you'll have a solid foundation for your future guitar playing and you'll have a good idea of what you should work on next.</p> <br>
        <p class="ba">If you have any questions anywhere along the entire series, you can feel free to <a href="../../contact.html">contact us</a>. In the next lesson, we'll start by taking a look at how to hold the guitar.</p>
        <button onclick="location.href='lesson2.php'">NEXT LESSON - HOW TO HOLD THE GUITAR</button>
    </div>
</body>
</html>
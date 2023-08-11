<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Lessons</title>
    <link rel="stylesheet" href="css/guitar.css">
    <link rel="shortcut icon" href="../../admin/images/G.png" type="image/x-icon">
</head>
<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>Free Online Guitar Lessons</h1>
        <p>Learn everything you need to know about how to play <br> and maintain your guitar from the internet's best instructors.</p>
        <div class="box">
            <div class="active">
                <a href="beginner_guitar.php">
                <span>BEGINNER? START HERE!</span>
                <h3>Beginner Guitar Course</h3>
                <p>5 step-by-step video lessons to help <br> you get started on the guitar.</p>
                </a>
            </div>

            <div class="in p1">
                <a href="technique.php">
                <h3>Technique</h3>
                <p>2 Lessons</p>
                </a>
            </div>

            <div class="in p2">
                <a href="music_theory.php">
                <h3>Music Theory</h3>
                <p>1 Lesson</p>
                </a>
            </div>

            <div class="in i1">
                <a href="lead_guitar.php">
                <h3>Lead Guitar</h3>
                <p>1 Lesson</p>
                </a>
            </div>

            <div class="in i2">
                <a href="exercises.php">
                <h3>Exercises</h3>
                <p>2 Lessons</p>
                </a>
            </div>
        </div>
        <button onclick="location.href='../../lessons.php'">VIEW ALL LESSONS CATEGORY</button>
    </div>
</body>
</html>
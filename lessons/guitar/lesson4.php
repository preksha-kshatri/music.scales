<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'db_ms');

$query = "SELECT * FROM guitarlessons WHERE Id=4";
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
    <title>Lesson 4</title>
    <link rel="stylesheet" href="css/lesson4.css">
    <link rel="shortcut icon" href="../../admin/images/ms.jpg" type="image/x-icon">
</head>
<body>
    <?php
    include 'gnav.php';
    ?>

    <div class="heading">
        <h1>The Parts Of The Guitar</h1>
        <span class="fa">BEGINNER GUITAR LESSONS</span><span class="fb"> - LESSON 4/5</span>
        <button onclick="location.href='beginner_guitar.php'">VIEW SERIES</button>
        <button class="ba" onclick="location.href='lesson5.php'">NEXT LESSON >></button>
    </div>

    <div class="lesson">
        <center>
        <p>Welcome to video four in the Beginner Guitar Quick-Start Series. In this lesson, we're going to learn about the parts of the acoustic and electric guitar. Knowing these parts is really important because you need to be able to communicate clearly with other guitar players about your instrument.</p> <br>
        <div class="v">
            <video width="720px" height="430px" controls src="<?php echo 'videos/' .$name;?>">
            </video>
        </div> <br>
        <p>There are two main sections on the guitar. These are the Neck, and the Body. The acoustic and the electric guitar have many of the same parts. However there are a few differences that I'll point out here.</p> <br>
        <h2>The Neck Of The Guitar</h2>
        <h3>The Headstock:</h3><p>At the end of the neck is the headstock, which is broken down further into more parts.</p> <br>
        <h3>Tuning Keys & Tuning Pegs:</h3><p>We've got the tuning keys, which are used to tune the strings of the guitar. Connected to the tuning keys are the tuning pegs, or string pegs, and that's where you attach your strings to the guitar.</p> <br>
        <h3>The Nut:</h3><p>Working our way down from the headstock, the narrow white strip is the nut. The strings rest on the nut before they go to the tuning pegs.</p> <br>
        <h3>The Frets:</h3><p>The skinny metal strips along the neck are called frets, and the frets are connected to the fretboard.</p> <br>
        <h3>The Fretboard:</h3><p>The fretboard is the piece of wood that runs all the way along the neck of the guitar.</p> <br>
        <h3>Fret Markers/Inlays:</h3><p>Most guitars have fret markers, which can add to the aesthetics of your guitar and also help you keep track of where you are on the guitar. You may have simple dots or something more fancy.</p> <br>
        <h3>The Body Of The Guitar</h3><p>The rest of the guitar is the body, and this is where acoustic and electric guitars can vary a little.</p> <br>

        <h2>Acoustic</h2>
        <h3>The Pickguard:</h3><p>On acoustic guitars you will usually see a pick guard, which keeps you from scratching your guitar when you strum.</p> <br>
        <h3>The Soundhole:</h3><p>Most acoustic guitars have a sound hole in the middle of the guitar, though some guitars may have the sound hole in a different spot or not have one at all.</p> <br>
        <h3>The Bridge:</h3><p>The black part of the guitar on the other end of the strings is the bridge, and is usually glued on top of the body.</p> <br>
        <h3>The Saddle(s):</h3><p>The thin white strip on the bridge is the saddle, which is where the strings rest before they go into the holes on the bridge.</p> <br>
        <h3>Bridge Pins:</h3><p>When you put the strings into the holes, you put bridge pins in the holes to hold the strings in place. Some bridges don't have pins at all, and those are called pinless bridges.</p> <br>
        <h3>Strap Buttons:</h3><p>Most guitars have a strap button on the side, and on the back. Your acoustic may not have strap buttons, so you would want to buy a strap that has a shoelace so it can be tied around the neck of your guitar.</p> <br>

        <h2>Electric</h2>
        <h3>The Pickups:</h3><p>The pickups are the microphones of the guitar, picking up the vibrations of the strings and moving them to your amplifier. There are two basic varieties of pickups: humbuckers and single-coils.</p> <br>
        <h3>Humbucker Pickups:</h3><p>Humbuckers got their name because they get rid of the hum that usually comes with single-coil pickups. They are generally wider than single-coil pickups.</p> <br>
        <h3>Single-Coil Pickups:</h3><p>Single-coil pickups are typically a bit brighter, but have the hum that humbuckers can usually get rid of.</p> <br>
        <p>Neither humbuckers nor single-coils are better or worse, so it comes down to personal preference and the kind of sound you want for your guitar.</p> <br>
        <h3>Volume & Tone Knobs:</h3><p>Next, let's talk about the controls on the body of the guitar, which are volume knobs and tone knobs. Yours may have one, two, three, or four depending on the type of guitar you have. The Volume knobs control how much volume or output is coming from your pickups. The Tone knobs controls the tone for the pickups, meaning you can control how much treble there is.</p> <br>
        <h3>Pickup Selector:</h3><p class="bb">The second type of control on electric guitar is the pickup selector switch. Most guitars have a three-way style toggle switch, and it controls which pickup is active. If you toggle the switch down, the bridge pickup is active, which is naturally has more treble because it is closer to the end of the strings. If the toggle switch is in the middle, both pickups are active which gives a medium tone. If the toggle is up, then the neck pickup is active, which is generally a more mellow tone. There are a couple of different types of pickup selector switch types, including the toggle switch, or if you have a Stratocaster guitar, you may have a 3 or 5-way blade switch.</p> <br>
        <p class="ba">This wraps up the basic parts of both the acoustic and electric guitar. In the next lesson, we're going to cover the names of the open strings on guitar. This lesson is important because you need to know the names of the strings to tune the guitar, and so you can start learning the notes names on guitar as well. <a href="../../contact.html">contact us</a></p>
        <button onclick="location.href='lesson5.php'">NEXT LESSON - THE GUITAR STRINGS NAMES</button>
    </div>
</body>
</html>
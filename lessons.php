<?php
session_start();
include 'admin/CRUD/connection.php';
if (!isset($_SESSION['login'])) {
	header('location:signin.php');
	exit;
}
// Not redirecting to earlier page without sign in.
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/lessons.css">
	<link rel="shortcut icon" href="admin/images/ms.jpg" type="image/x-icon">
	<title>Lessons</title>
</head>
<body>
	<?php
	include 'include/l-nav.php';
	?>

	<div class="L">
		<h1>Lessons:</h1>
		<p>Let's get you started with your music lessons by<br> choosing the instruments that you prefer to learn or improve on.<br>Simply choose & click on the image of the musical instrument that<br>you want to begin your lessons or seek guidance with.</p>
		<div class="box">
			<div class="o">
				<a href="lessons/guitar/guitar.php"><img src="admin/images/g.jpg">
					<h2>Guitar</h2>
			</div>

			<div class="o">
				<a href="lessons/piano/piano.php"><img src="admin/images/p.jpg">
					<h2>Piano</h2>
			</div>

			<div class="o">
				<a href="lessons/song/song_tutorials.php"><img src="admin/images/st.jpg">
					<h2>Song Tutorials</h2>
			</div>
		</div>
	</div>
</body>
</html>
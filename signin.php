<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'admin/CRUD/connection.php';

	$email = $_POST['email'];
	$password = $_POST['pass'];
	$encrypted_pass = md5($password);

	$sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$encrypted_pass'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$login = true;
		session_start();
		$_SESSION['Id'] = $row['Id'];
		$_SESSION['email'] = $row['Email'];
		$_SESSION['login'] = true;
		header('location:lessons.php');
	} else {
?>
		<script>
			alert("Incorrect Email or Password / User doesn't exist.");
		</script>
<?php
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<script type="text/javascript" src="js/signin.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale1.0">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="shortcut icon" href="admin/images/ms.jpg" type="image/x-icon">
	<script src="https://kit.fontawesome.com/cacd88a93b.js" crossorigin="anonymous"></script>

</head>

<body>
	<div class="box">
		<form method="post">
			<h2>Sign In</h2>
			<table>
				<tr>
					<td>
						<label>Email:</label>
						<i class="fas fa-user"></i>
						<input type="text" name="email" id="uemail" onkeyup="uvalidation()" required>
						<p id="amsg" style="color: red;"></p>
					</td>
				</tr>

				<tr>
					<td>
						<label>Password:</label>
						<i class="fa-solid fa-key"></i>
						<input id="upass" type="password" name="pass" onkeyup="pvalidation()" required>
						<p id="bmsg" style="color: red;"></p>
					</td>
				</tr>

				<tr>
					<td><button name="submit" class="submit">Login</button></td>
				</tr>

				<tr>
					<td>
						<center>
							<a href="forgot.php" class="a">Forgot Password ?</a>
					</td>
				</tr>

				<tr>
					<td>
						<center>
							<label>Don't have an account ?</label>
					</td>
				</tr>

				<tr>
					<td>
						<center>
							<a href="signup.php" class="b">Create one</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<link rel="shortcut icon" href="admin/images/ms.jpg" type="image/x-icon">
	<script type="text/javascript" src="js/signup.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="box pt-5">
		<form action="./curd/insert.php" method="post" id="myForm">
			<h2 class="">Sign Up</h2>
			<label>Username:</label><i class="fas fa-user"></i>
			<input type="text" name="uname" id="uname" onkeyup="namevalid()" required>

			<p class="amsg" class="msg" id="amsg" style="color: red;"></p>
			<label>Email:</label><i class="fa-solid fa-envelope"></i>
			<input type="email" name="email" id="email" onkeyup="emailvalid()" required>
			<p class="bmsg" class="msg" id="bmsg" style="color: red;"></p>

			<label>Password:</label><i class="fa-solid fa-lock"></i>
			<input type="password" name="pass" id="pass" onkeyup="passvalid()" required>
			<p id="cmsg" class="msg" style="color: red;"></p>

			<label>Confirm Password:</label><i class="fa-solid fa-key"></i>
			<input type="password" name="passcf" id="passcf" onkeyup="cpassvalid()" required>
			<p id="dmsg" class="msg" style="color: red;"></p>

			<button name="signup" class="btn btn-primary" value="submit" onclick="formValidate()">Submit</button>
			<center>
				<p>Already have an account ?</p>
				<a class="btn btn-danger" href="signin.php">Sign in</a>
			</center>
		</form>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
	</div>
</body>

</html>
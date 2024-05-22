<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="assets/icon.png" />
		<title>Register</title>
		<link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	</head>
	<body>
  <center>
	<header>
		
			<div class="navbar">
				<div class="logo">
					<img src="assets/img/Makanan.jpeg" alt="">
				</div>
        <a href="index.php">Home</a>
        <a href="index.php">about us</a>
        <a href="index.php">Service</a>
		<a href="Login.php" class="btn_login">Login</a>
		</div>
		
	</header>
	<main>
	<div class="form-login">
		  <h3>Register</h3>
		  <form action="register-proses.php" method="post">
		    <input class="input" type="email" name="email"
					placeholder="Email" />
		    <input class="input" type="text" name="username"
					placeholder="Username"/>
		    <input class="input" type="password" name="password"
				      placeholder="Password" />
  		    <button type="submit" class="btn_login" name="register"
				id="register">
				Register
		    </button>
	<a href="Login.php">Lakukan Login</a>
		</div>
	</main>
	<footer>
		<h4>&copy; 2024 NutriTrack. All rights reserved.</h4>
	</footer>
   </center>
	</body>
</html>
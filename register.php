<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<link rel="icon" href="assets/icon.png" />
	<link rel="stylesheet" href="style-rev.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet" />
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<div class="container">
		<header>
			<nav>
				<div class="logo">
					<img src="assets/logo.jpg" alt="" />
				</div>
				<input type="checkbox" id="click" />
				<label for="click" class="menu-btn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="login.php" class="btn_login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="center">
				<div class="form-login">
					<h3>Register</h3>
					<form action="php/register.php" method='post'>
						<input class="input" type="email" name="email" id="email"
							placeholder="Email" />
						<input class="input" type="text" name="username"
							placeholder="Username" />
						<input class="input" type="password" name="password" id="password"
							placeholder="Password" />
						<input class="input" type="password" name="password-confirmation" id="password-confirmation"
							placeholder="Password Confirmation" />
						<button type="submit" class="btn_login" name="register"
							id="register">
							Register
						</button>
					</form>
				</div>
			</div>
		</main>
	</div>
</body>
<script src="register.js"></script>
</html>
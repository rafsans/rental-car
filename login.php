<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="style-rev.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"
		/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
		<li><a href="register.php" class="btn_login">Register</a></li>
	    </ul>
        </nav>
	</header>
	<main>
	  <div class="center">
	    <div class="form-login">
		 <h3>Login</h3>
		 <form action="php/login.php" method='post'>
		   <input class="input" type="text" name="email-login"
			    placeholder="Email" />
	         <input class="input" type="password" name="password-login"
			    placeholder="Password" />
		   <button type="submit" class="btn_login" name="login"  
                      id="login"> Login
		   </button>
		 </form>
	  </div>
	</main>
   </div>
</body>
<script src="login.js"></script>
</html>

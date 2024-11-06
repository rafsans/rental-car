
<!DOCTYPE html>
<html>

<head>
  <title>Signup</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Signup</h1>
    <form class="wrapper" id="form-register" action="php/register.php" method="POST">
      <p class="error"></p>
      <div class="form-group">
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email" />
      </div>
      <div class="form-group">
        <p class="error"></p>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your password" />
      </div>
      <div class="form-group">
        <p class="error"></p>
        <input
          type="password"
          id="password-confirmation"
          name="password-confirmation"
          placeholder="Enter your password Confirmation" />
      </div>
      <button type="submit" class="btn">Signup</button>
      <div class="signup">
        Already have an account? <a href="login.php">Login</a>
      </div>
    </form>
  </div>
</body>
<script src="register.js"></script>

</html>
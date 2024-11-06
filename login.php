<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form class="wrapper" id="form-login" action="php/login.php" method="POST">
        <div class="form-group">
          <input
            type="email"
            id="email-login"
            name="email-login"
            placeholder="Enter your email"
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            id="password-login"
            name="password-login"
            placeholder="Enter your password"
          />
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
        <button type="submit" class="btn">Login</button>
        <div class="signup">
          Don't have an account? <a href="register.php">SignUp</a>
        </div>
      </form>
    </div>
    <div class="wrapper-modal">
      <div class="modal">
        <img src="assets/salah.png" alt="" />
        <h1>Login Berhasil</h1>
      </div>
    </div>
  </body>
  <script src="login.js" ></script>
</html>

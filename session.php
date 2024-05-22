<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Login</title>
</head>

<body>
  <section class="section">
    <div class="logo-container">
      <img src="http://localhost/EcoScape/assets/logo2.png" alt="EcoScape Logo" class="logo">
      <div class="particles-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
      </div>
    </div>
    <div class="wrapper">
      <div class="logreg-box">
        <!-- login form -->
        <div class="form-box login">
          <div class="logreg-title">
            <h2>Login</h2>
            <p>Please login to use the platform</p>
          </div>
          <form id="login-form">
            <div class="input-box">
              <span class="icon"><i class='bx bxs-user'></i></span>
              <input type="text" name="username" required>
              <label class="label-username anim-typewriter">Username</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt'></i></span>
              <input type="password" name="password" required>
              <label>Password</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox">
                Remember me</label>
              <a href="#">Forgot password ?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="logreg-link">
              <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
            </div>
          </form>
          <div id="error-message" style="display: none;"></div>
        </div>
        <!-- register form -->
        <div class="form-box register">
          <div class="logreg-title">
            <h2>Registration</h2>
            <p>Please provide the following to verify your identity</p>
          </div>
          <form id="signup-form">
            <div class="input-box">
              <span class="icon"><i class='bx bxs-user'></i></span>
              <input type="text" name="username" required>
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-envelope'></i></span>
              <input type="email" name="email" required>
              <label>Email</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt'></i></span>
              <input type="password" name="password" required>
              <label>Password</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox">
                I agree to the terms & conditions</label>
            </div>

            <button type="submit" class="btn">Register</button>

            <div class="logreg-link">
              <p>Already have an account ? <a href="#" class="login-link">Login</a></p>
            </div>
          </form>
          <div id="signup-error-message" style="display: none;"></div>
        </div>
      </div>

      <!-- <div class="media-options">
        <a href="#">
          <i class='bx bxl-google'></i>
          <span>Login with Google</span>
        </a>
        <a href="#">
          <i class='bx bxl-facebook-circle'></i>
          <span>Login with Facebook</span>
        </a>
      </div> -->
    </div>
  </section>
  <script src="js/script.js"></script>
</body>

</html>
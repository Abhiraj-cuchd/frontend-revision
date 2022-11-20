<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CarRent | Register Profile</title>
  <link href="auth.css" rel="stylesheet" />
</head>
<style>
  .left {
      background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.5)), url(img/Car\ Website\ –\ 1@2x.png);
      background-size: cover;
  }
</style>
<body>
  <div class="split_screen">
    <div class="left">
      <section class="copy">
        <h1>Take your Car</h1>
        <p>Enjoy your car rides</p>
      </section>
    </div>
    <div class="right">
      <form action="" method="POST">
        <section class="copy">
          <h2>Sign Up</h2>
          <div class="login_container">
            <p>Already have an account? <a href="login.php">Sign In instead</a></p>
          </div>
        </section>
        <div class="input-container name">
          <label for="fname">Full Name</label>
          <input type="text" id="fname" name="fname">
        </div>
        <!-- <div class="input-container name">
          <label for="fname">Name</label>
          <input type="text" id="fname" name="username">
        </div> -->
        <div class="input-container email">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="input-container password">
          <label for="password"> Password</label>
          <input type="password" id="password" name="password1" placeholder="Must be atleast 6 characters">
        </div>
        <div class="input-container password">
          <label for="password">Confirm Password</label>
          <input type="password" id="password" name="password1" placeholder="Must be atleast 6 characters">
        </div>
        <button class="signup-btn" type="submit">
          Sign Up
        </button>
        <section class="copy legal">
          <p><span class="small">By continuing, you agree to accept our <br> <a href="#">Privacy Policy</a>
          &amp; <a href="#">Terms of Service</a></span></p>
        </section>
      </form>
    </div>
  </div>
</body>
</html>

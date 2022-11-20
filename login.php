
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CarRent | Login</title>
  <link href="auth.css" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
  .left {
      background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.5)), url(img/about.png);
      background-size: cover;
  }
</style>
<body>
  <!-- {% for message in messages %}
            <script>
              if ("{{message}}" == "username OR password is incorrect") {
                swal({
                    title: "Error",
                    text: "{{ message }}",
                    icon: "error",
                });
              }
              else {
                swal({
                    title: "Success",
                    text: "{{ message }}",
                    icon: "success",
                });
              }
                
            </script>  
  {% endfor %} -->
  <div class="split_screen">
    <div class="left">
      <section class="copy">
        <h1>Welcome Back</h1>
        <p>Login and continue Renting!</p>
      </section>
    </div>
    <div class="right">
      <form action="" method="POST">
        <section class="copy">
          <h2>Sign Up</h2>
          <div class="login_container">
            <p>Don't have an account? <a href="register.php">Sign Up instead</a></p>
          </div>
        </section>
        <div class="input-container email">
          <label for="email">email</label>
          <input type="text" id="username" name="email">
        </div>
        <div class="input-container password">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Must be atleast 6 characters">
        </div>
        <button class="signup-btn" type="submit">
          Sign In
        </button>
      </form>
    </div>
  </div>
</body>
</html>

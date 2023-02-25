<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="check_login.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
           <!-- username -->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="form3Example3" name="username" required class="form-control form-control-lg" placeholder="Enter a valid username"/>
            </div>
          <!-- password -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="form3Example4" name="password" required class="form-control form-control-lg" placeholder="Enter password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with Repair platforms</p>
            
          </form>
          <form method="POST" action="user.reg.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>

            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" name="u_name" placeholder="Name" />
            </div>

            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" name="u_lastname" placeholder="Lastname" />
            </div>

            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="tel" name="tel" placeholder="Telephone" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user_level" placeholder="Level" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with Repair platforms</p>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New User ?</h3>
            <p>
            Register a new member for accessing the computer repair website      click here.
            </p>

            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Return to Sign in ?</h3>
            <p>
            Still not sure? or already registered ? Back to the login page, click here.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

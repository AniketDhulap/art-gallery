<?php include 'header.php'; ?>

<body>
  <div class="containers">
    <div class="login-page">
      <div class="login-box">
        <form>
          <div class="login-name">
            <h1>USER LOGIN</h1>
          </div>
          <div class="login-email">
            <input type="email" placeholder="Email" />
          </div>
          <div class="login-password">
            <input type="password" placeholder="Password" />
          </div>
          <div class="sign-up-btn">
            <div class="signup-button">
              <a href="#">LOG-IN</a>
            </div>
            <div class="signup-button">
              <a href="signup.php">Sign-Up</a>
            </div>
          </div>
          <div class="login-forgot">
            <a href="user-forgot.php">forgot password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>

<body>
  <div class="containers">
    <div class="login-page">
      <div class="login-box">
        <form>
          <div class="login-name">
            <h1>Reset Password</h1>
          </div>
          <div class="login-email">
            <a href="#">SEND</a>
            <input type="string" placeholder="Enter OTP" />
            <!-- type string taklay tu chnage kar ky lagel te -->

          </div>
          <div class="login-password">
            <input type="password" placeholder="Enter New Password" />
          </div>
          <div class="login-password">
            <input type="password" placeholder="Re-Enter New Password" />
          </div>
          <div class="login-button">
            <a href="#">RESET</a>
          </div>
          <div class="login-forgot">
            <a href="login.php">Back to Login? Click Here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/css/my_css.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" action="<?php echo base_url(); ?>validate/signup" method="POST">
      <div class="validation-error">
        <?php 
          if (isset($signup_error)) {
            echo $signup_error;
          }
        ?>
     </div>
      <input type="text" name="userName" placeholder="username"/>
      <input type="password" name="userPass" placeholder="password"/>
      <input type="text" name="userFullName" placeholder="full name"/>
      <input type="text" name="userEmail" placeholder="email address"/>
      <input type="text" name="userPhoneNumber" placeholder="phone number"/>
      <input type="text" name="userSocial" placeholder="social network link"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="<?php echo base_url(); ?>validate/signin" method="POST">
      <div class="validation-error">
          <?php 
            if (isset($signin_error)) {
              echo $signin_error;
            }
          ?>
       </div>
      <input type="text" name="userName"placeholder="username"/>
      <input type="password" name="userPass" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
  </div>

  <!-- jQuery -->
    <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript">
    <?php 
      if ($this->uri->segment(2) == "signup"){
        echo "$('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");";
        echo "$('.message a').click(function(){
       $('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
        });";
      } else echo "$('.message a').click(function(){
     $('form').animate({height: \"toggle\", opacity: \"toggle\"}, \"slow\");
  });";
    ?>
  </script>
</body>
</html>
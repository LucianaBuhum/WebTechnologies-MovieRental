<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <title></title>
  </head>
  <body>
      <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <a href="login.php">   <h2 class="inactive underlineHover"> Sign In </h2> </a>
            <a href="signup.php">  <h2 class="active">Sign Up </h2> </a>

            <!-- Login Form -->
            <form action="sign-inc.php" method="post">
              <input type="text" id="name" class="fadeIn third" name="name" placeholder="Full Name">
              <input type="text" class="sign-form-text" name="email" placeholder="Email">
              <input type="text" id="login" class="fadeIn second" name="uid" placeholder="Username">
              <input type="password" id="password" class="fadeIn third" name="pwd" placeholder="Password">
              <input type="password" id="password" class="fadeIn third" name="pwdrepeat" placeholder="Repeat Password">
              <input type="submit" class="fadeIn fourth" name="submit" value="Sign up">
            </form>

          </div>
          <?php
             if(isset($_GET["error"])){
          	if($_GET["error"] == "emptyinput"){
          	  echo "<div style='text-align:center' > Fill in all fields! </div>";
          }
          	else if($_GET["error"] == "invaliduid"){
          	   echo "<div style='text-align:center'> Choose a proper username!</div>";
          	}

          	else if($_GET["error"] == "invalidemail"){
          	   echo "<div style='text-align:center'>Choose a proper email!</div>";
          	}
          	else if($_GET["error"] == "passwordsdontmatch"){
          	   echo "<div style='text-align:center'>Passwords do not match!</div>";
          	}
          	else if($_GET["error"] == "stmtfailed"){
          	   echo "<div style='text-align:center'>Something went wrong!</div>";
          	}
          	else if($_GET["error"] == "usernametaken"){
          	   echo "<div style='text-align:center'>The username is already taken!</div>";
          	}
          	else if($_GET["error"] == "none"){
          	   echo "<div style='text-align:center'>You have signed up successfully!</div>";
          	}
          }


          ?>
  </div>
  </body>
</html>


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
          <a href="login.php">  <h2 class="active"> Sign In </h2> </a>
          <a href="signup.php"> <h2 class="inactive underlineHover">Sign Up </h2></a>

            <!-- Login Form -->
            <form action="log-inc.php" method="post">
              <input type="text" id="login" class="fadeIn second" name="uid" placeholder="Username">
              <input type="password" id="password" class="fadeIn third" name="pwd" placeholder="Password">
              <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
            </form>

          </div>

          <?php
             if(isset($_GET["error"])){
          	if($_GET["error"] == "emptyinput"){
          	  echo "<div style='text-align:center' > Fill in all fields! </div>";
          }
          	else if($_GET["error"] == "wronglogin"){
          	   echo "<div style='text-align:center'> Incorrect login information!</div>";
          	}
          }
          ?>

  </div>
  </body>
</html>

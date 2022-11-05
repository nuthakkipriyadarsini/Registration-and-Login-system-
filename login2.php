<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css\styles.css"/>
</head>
<body>
<?php
    $db=new mysqli("localhost","root","","registration_db");

    if($db)
    {
  //echo "db is connected";
    }
     else {

      echo " db is not connected";

      }

    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($db, $email);
        $passward = stripslashes($_REQUEST['passward']);
        $passward = mysqli_real_escape_string($db, $passward);
        // Check user is exist in the database
        $query    = "SELECT * FROM `form` WHERE email='$email' AND passward='$passward'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: display.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="email" class="login-input" name="email" placeholder="email" autofocus="true"/>
        <input type="passward" class="login-input" name="passward" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register1.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>

<?php 


require_once('../configuration.php'); 


session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['uName']);
      $mypassword = mysqli_real_escape_string($db,$_POST['uPassword']); 
      
      $sql = "SELECT * FROM user2 WHERE uName = '$myusername' and uPassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
    
    
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
         die();
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login-page">
  <div class="form">
    <!--
    <form class="register-form">
      <input type="text" placeholder="uName"/>
      <input type="password" placeholder="uPassword"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    -->
    <form class="login-form" action="#" method="post">
      <input type="text" name="uName" placeholder="Name"/>
      <input type="password" name="uPassword" placeholder="Password"/>
      <button type="submit" >login</button>
      <p class="message">Not registered? <a href="http://qualitywebapi.eu-gb.mybluemix.net/kullanici/registration.php">Create an account</a></p>
     
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

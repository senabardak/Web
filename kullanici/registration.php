<?php
require_once('../configuration.php'); //include db connection
session_start();

if(isset($_SESSION['user2'])!="")
{
 header("Location: http://qualitywebapi.eu-gb.mybluemix.net/homepage.php");
}


if(isset($_POST['btn-signup']))
{
 
 $uName = $_POST["uName"];
 $uSurname = $_POST["uSurname"];
 $uEmail = $_POST["uEmail"];
 $uTelno = $_POST["uTelno"];
 $uPassword = md5($_POST["uPassword"]);

 
 $sql = "insert into user2 values (NULL,'".$uName."','".$uSurname."','".$uEmail."','".$uTelno."','".$uPassword."')";
 $result = $db->query($sql);
  if($result) {
    
    $_SESSION['Registration'] = true;
    header("Location: http://qualitywebapi.eu-gb.mybluemix.net/homepage.php");

    die();
  }
  else{
    

    ?>
        <script>alert('error while registering you...');</script>
        <?php

        $_SESSION['Registration'] = false;
  }
 /*if(mysql_query("INSERT INTO users(name,surname,email,telno,password,usergroup) VALUES('$name','$surname','$email','$telno','$password','$usergroup')"))
 {
  ?>
        <script>alert('successfully registered');</script>
        <?php
        header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body style = "background-color: #1aafd0;">
<center>
<div id="login-form" style ="margin-top: 150px;">
<form method="post">
	<h2>Registration Form</h2>
<table align="center" width="10%" border="0">
<tr>
<td><input type="text" name="uName" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="text" name="uSurname" placeholder="Your Surname" required /></td>
</tr>
<tr>
<td><input type="email" name="uEmail" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="text" name="uTelno" placeholder="Your Telephone Number" required /></td>
</tr>
<tr>
<td><input type="password" name="uPassword" placeholder="Your Password" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup" style = "background-color:#d4482f; color: white; font-weight: bold; margin-top:20px; margin-left:40px">Sign Me Up</button></td>
</tr>
</table>
</form>
	<a href = "http://qualitywebapi.eu-gb.mybluemix.net/homepage.php";>
		<button style = "background-color:#1d5d6c; color: white; font-weight: bold; margin-top:20px;">Back to the Homepage</button>
	</a>
</div>
</center>
</body>
</html>
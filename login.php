<!DOCTYPE HTML>
<html>
<head>
<title>Login </title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
 <form method="POST" action="loginuser.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Login</h1>
    <hr>

   
    <input type="email" placeholder="Enter Email" name="email" required>

    <input type="password" placeholder="Enter Password" name="psw" id="passwd" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
<br>
<?php
  include "captcha.php";

?>

    <input type="text" name="captcha" id="captcha" required />


    <div class="clearfix">

      <button type="submit" class="loginbtn">Login</button>
    </div>
  </div>
  <br>
 <input type="reset"><br>
  <a href="signup.html">new user? signup here</a>
</form> 

</center>


</body>
</html> 
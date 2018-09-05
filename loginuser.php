<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
include("database.php");
extract($_POST);

$rs=mysqli_query($conn,"select * from users where email='$email' and password='$psw'");
if($captcha != $_SESSION['captcha']){
    echo "<h1 align=center>Wrong captcha!</h1>";
}
else if(mysqli_num_rows($rs)<1)
{
    echo "<h1 align=center>Wrong credentials!</h1>";
}
else
{
$_SESSION["login"]=$email;
}

if (isset($_SESSION["login"])) 
{
echo "<h1 align=center>".$email." sucessfully logged in!! </h1>";
$_SESSION = array();
//clear session from disk
session_destroy();
exit;
}
?>
</body>
</html>
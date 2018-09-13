<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
extract($_POST);
include("database.php");
session_start();
$email=$_SESSION["login"];
$query="insert into notes(email,note) values('$email','$note')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your note $note Sucessfully added</div>";
echo "<br><div class=head1>press button to add another note </div>";
echo "<br><div class=head1><a href=home.php>Add another note</a></div>";
?>
</body>
</html> 
<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center>
    <h1>Notes </h1>
<?php
extract($_POST);
include("database.php");
session_start();
$email=$_SESSION["login"];
echo "<h2>Notes of $email</h2>";
echo "<br><br><ul>";
$query="select note from notes where email='$email'";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
while($row = $rs->fetch_assoc()){
//while ($row = mysql_fetch_assoc($rs)) {
    echo "<li>".$row["note"]."</li>";
//}
}
echo "</ul>"
?>
</center>
</body>
</html> 
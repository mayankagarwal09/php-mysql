<!DOCTYPE HTML>
<html>
<head>
<title>Home </title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<form method="POST" action="notes.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Notes</h1>
    <hr>


    <input type="text" name="note" id="note" required />


    <div class="clearfix">

      <button type="submit" class="notebtn">Add Note</button>
    </div>
  </div>
  <br>
</form> 


<br>
<form action="getnotes.php" method="post">
     <input type="submit" value="Get all notes">
 </form>
 <br><br>
 <form action="logout.php" method="post">
     <input type="submit" value="Logout">
 </form>
</center>
<?php
  include "database.php";
  session_start();
  if(!isset($_SESSION["login"])){
      header('Location:./denied.html');
  }

?>

</body>
</html> 
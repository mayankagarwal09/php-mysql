
<?php

session_start();

if(isset($_SESSION['captcha']))
{
unset($_SESSION['captcha']);
}

 

$num_chars=6;
$characters=array_merge(range(0,9),range('A','Z'),range('a','z'));
shuffle($characters);



$captcha_text="";
for($i=0;$i<$num_chars;$i++)
{
$captcha_text.=$characters[rand(0,count($characters)-1)];
}

$_SESSION['captcha'] =$captcha_text;
echo "<h2>".$captcha_text."</h2>";


?>
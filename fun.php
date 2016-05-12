<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<title> Rena's Personal Page </title>
<link type = "text/css" rel="stylesheet" href="style.css"/>
</head>


<body>

<div id="header">
<p><img id ="imgheader" src = "fishheader.bmp" alt = "fishheader" height="100" width="750"/></p>
<h1> Fun Stuff - Test Your Compatability!</h1>
</div>

<?php
require("nav.php");
?>

<div id = "body">

<?php
if (isset($_POST['submit'])) { //if the form has been submitted
$name=strip_tags($_POST['name']);
$age=strip_tags($_POST['age']);
$error=false;
           if(!preg_match("/^[A-Z]{1}[a-z]+$/",$name)){ //check if name is in right format, print error msg if not
           $error=true;
           echo("<p>Error: Name should consist of a capital letter followed by non-capital letters</p>");}
           
		   if(!preg_match("/^[0-9]{1,2}$/",$age)){ //check to see if age is right format, print error msg if not
           $error=true;
           echo("<p>Error: Age should consist of 1 to 2 numbers</p>");}

		   if($error==true){ //if the formats are wrong require form.php 
			require("form.php");}else{ //otherwise get the values of the form
									$character = $_POST['character'];
									$pet = $_POST['pet'];
									$asset=$_POST['asset'];
									$sex=$_POST['sex'];
									$color=$_POST['color'];
									$drink=$_POST['drink'];
									$age1= ABS(18-$age);
									$compat = $character+$pet+$asset+$sex+$color+$drink+$age1;
							        echo("<h4>Your Results!</h4>");
									
									if($compat<35){ //if the variables add up to less than 35, you are compatible
									echo("<p>Congratulations $name! You Are Compatible!<br/><br/>
									<img src=\"heart.jpg\" alt=\"heart\" height=\"100\" width=\"100\"/><br/><br/>
									Wanna <a href=\"fun.php\">try again</a>?
									</p>
									");}
									//if they add up to more you are not compatible
									else{echo("<p>$name You Are Not Compatible!<br/><br/>
									<img src=\"wrong.png\" alt=\"wrong\" height=\"100\" width=\"100\"/><br/><br/>
									Wanna <a href=\"fun.php\">try again</a>?
									</p>");}
								}}

//if form was not submitted display message asking to submit form & form
else{ echo("<p> After reading all that information about me, here's something fun to do!<br/><br/>
Fill out this form to see how compatible you are with me! :) <br/><br/></p>");
require("form.php");}
?>
<p><br/><br/></p>

</div>

</body>
</html>
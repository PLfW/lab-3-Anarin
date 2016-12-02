<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Last Place Of Work</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="lpow">
<b id="welcome">Welcome : 
	<i>
		<?php 
		echo $login_session; 
		?>
	</i>
</b>
<b id="employee"><a href="employee.php">Employees</a></b>
<b id="education"><a href="education.php">Education</a></b>
<b id="profile"><a href="profiles.php">Profiles</a></b>
<b id="lpow"><a href="lpow.php">Last Place Of Work</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
 <form action="linput.php" method="post">
  Company Name:<br>
  <input type="text" name="l_name" id="l_name">
  Position:<br>
  <input type="text" name="l_position" id="l_position">
  Experience:<br>
  <input type="text" name="l_experience" id="l_experience">
  Reason Of Quit:<br>
  <input type="text" name="l_reason" id="l_reason">
  Quit Date:<br>
  <input type="text" name="l_date" id="l_date">
  <input type="submit" value="Submit">

</form> 
</body>
</html>
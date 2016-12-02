<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Employee</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="employee">
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
 <form action="winput.php" method="post">
  Sex:<br>
  <input type="text" name="w_sex" id="w_sex">
  Position:<br>
  <input type="text" name="w_position" id="w_position">
  Photo:<br>
  <input type="text" name="w_photo" id="w_photo">
  First Name:<br>
  <input type="text" name="w_firstname" id="w_firstname">
  Name:<br>
  <input type="text" name="w_name" id="w_name">
  Last Name:<br>
  <input type="text" name="w_lastname" id="w_lastname">
  <input type="submit" value="Submit">

</form> 
</body>
</html>
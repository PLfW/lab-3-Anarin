<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Education</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="education">
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
 <form action="einput.php" method="post">
  University Name:<br>
  <input type="text" name="e_name" id="e_name">
  Diploma Identifier:<br>
  <input type="text" name="e_duploma" id="e_duploma">
  Graduation Date:<br>
  <input type="text" name="e_enddate" id="e_enddate">
  Secialty:<br>
  <input type="text" name="e_specialty" id="e_specialty">
  Qualification:<br>
  <input type="text" name="e_qualification" id="e_qualification">
  Form:<br>
  <input type="text" name="e_form" id="e_form">
  <input type="submit" value="Submit">

</form> 
</body>
</html>
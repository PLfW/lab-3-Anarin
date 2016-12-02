<?php
include('session.php');
$id = $_GET['id'];
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
 	<?php

         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("delete from worker where w_id = '".$id."'");
           ?>
</body>
</html>
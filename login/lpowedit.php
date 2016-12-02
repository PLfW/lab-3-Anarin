<?php
include('session.php');
$id = $_GET['id'];
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
 <form>
 	<?php

         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM lastworkplace WHERE l_id = '".$id."'");
           while($row = mysql_fetch_assoc($results)) {
            ?>
  Identifier:<br>
  <input type="text" name="l_id" value="<?php echo $row['l_id'];?>"><br>
  Company Name:<br>
  <input type="text" name="l_name" value="<?php echo $row['l_name'];?>">
  Position:<br>
  <input type="text" name="l_position" value="<?php echo $row['l_position'];?>">
  Experience:<br>
  <input type="text" name="l_experience" value="<?php echo $row['l_experience'];?>">
  Reason Of Quit:<br>
  <input type="text" name="l_reason" value="<?php echo $row['l_reason'];?>">
  Quit Date:<br>
  <input type="text" name="l_date" value="<?php echo $row['l_date'];?>">
  <input type="submit" value="Submit">
  <?php
           }
           ?>
</form> 
</body>
</html>
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
 <form>
 	<?php

         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM worker WHERE w_id = '".$id."'");
           while($row = mysql_fetch_assoc($results)) {
            ?>
  Identifier:<br>
  <input type="text" name="w_id" value="<?php echo $row['w_id'];?>"><br>
  Sex:<br>
  <input type="text" name="w_sex" value="<?php echo $row['w_sex'];?>">
  Position:<br>
  <input type="text" name="w_position" value="<?php echo $row['w_position'];?>">
  Photo:<br>
  <input type="text" name="w_photo" value="<?php echo $row['w_photo'];?>">
  First Name:<br>
  <input type="text" name="w_firstname" value="<?php echo $row['w_firstname'];?>">
  Name:<br>
  <input type="text" name="w_name" value="<?php echo $row['w_name'];?>">
  Last Name:<br>
  <input type="text" name="w_lastname" value="<?php echo $row['w_lastname'];?>">
  <input type="submit" value="Submit">
  <?php
           }
           ?>
</form> 
</body>
</html>
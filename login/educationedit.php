<?php
include('session.php');
$id = $_GET['id'];
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
 <form>
 	<?php

         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM education WHERE e_id = '".$id."'");
           while($row = mysql_fetch_assoc($results)) {
            ?>
  Identifier:<br>
  <input type="text" name="e_id" value="<?php echo $row['e_id'];?>"><br>
  University Name:<br>
  <input type="text" name="e_name" value="<?php echo $row['e_name'];?>">
  Diploma Identifier:<br>
  <input type="text" name="e_duploma" value="<?php echo $row['e_duploma'];?>">
  Graduation Date:<br>
  <input type="text" name="e_enddate" value="<?php echo $row['e_enddate'];?>">
  Secialty:<br>
  <input type="text" name="e_specialty" value="<?php echo $row['e_specialty'];?>">
  Qualification:<br>
  <input type="text" name="e_qualification" value="<?php echo $row['e_qualification'];?>">
  Form:<br>
  <input type="text" name="e_form" value="<?php echo $row['e_form'];?>">
  <input type="submit" value="Submit">
  <?php
           }
           ?>
</form> 
</body>
</html>
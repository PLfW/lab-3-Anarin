<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : 
	<i>
		<?php 
		echo $login_session; 
		?>
	</i>
</b>
<b id="employee"><a href="employee.php">Employees</a></b>
<b id="education"><a href="">Education</a></b>
<b id="profile"><a href="">Profiles</a></b>
<b id="lpow"><a href="">Last Place Of Work</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div>
	
</div>
<div id="main">
	<table>
		<tr>
			<th>Identifier </th>
			<th>Sex</th>
			<th>Position</th>
			<th>First Name</th>
			<th>Name</th>
			<th>Last Name</th>
		</tr>
 <?php
         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM worker");
           while($row = mysql_fetch_assoc($results)) {
            ?>
                <tr>
                    <td><?php echo $row['w_id']?></td>
                    <td><?php echo $row['w_sex']?></td>
                    <td><?php echo $row['w_position']?></td>
                    <td><?php echo $row['w_firstname']?></td>
                    <td><?php echo $row['w_name']?></td>
                    <td><?php echo $row['w_lastname']?></td>
                </tr>

            <?php
           }
           ?>
		</tr>
	</table>
</div>
</body>
</html>
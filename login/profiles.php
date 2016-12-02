<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
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
<b id="education"><a href="education.php">Education</a></b>
<b id="profile"><a href="profiles.php">Profiles</a></b>
<b id="lpow"><a href="lpow.php">Last Place Of Work</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div>
	
</div>
<div id="main">
	<table>
		<tr>
			<th>Identifier </th>
			<th>Date Of Enter</th>
			<th>Education Identifier</th>
			<th>Last Place Of Work Identifier</th>
			<th>Employee Identifier</th>
		</tr>
 <?php
         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM profile");
           while($row = mysql_fetch_assoc($results)) {
            ?>
                <tr>
                    <td><?php echo $row['p_id']?></td>
                    <td><?php echo $row['p_date']?></td>
                    <td><?php echo $row['p_e_id']?></td>
                    <td><?php echo $row['p_l_id']?></td>
                    <td><?php echo $row['p_w_id']?></td>
                </tr>

            <?php
           }
           ?>
		</tr>
	</table>
</div>
</body>
</html>
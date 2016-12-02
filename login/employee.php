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
<div>
	
</div>
<div id="main">
	<table method="post">
		<tr>
			<th>#</th>
			<th>Identifier </th>
			<th>Sex</th>
			<th>Position</th>
			<th>First Name</th>
			<th>Name</th>
			<th>Last Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
 <?php
		 
         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM worker");
            $n = mysql_num_rows($results);
            $i=1;
           while($row = mysql_fetch_assoc($results)) {
            $id=$row['w_id'];
            ?>
                <tr>
                	<td><?php echo $i;  ?></td>
                    <td><?php echo $row['w_id']?></td>
                    <td><?php echo $row['w_sex']?></td>
                    <td><?php echo $row['w_position']?></td>
                    <td><?php echo $row['w_firstname']?></td>
                    <td><?php echo $row['w_name']?></td>
                    <td><?php echo $row['w_lastname']?></td>
                    <?php
                    echo('<td><a href="employeeedit.php?id='.$id.'">Edit</a></td>');
                    print('<td><a href="employeedel.php?id='.$id.'">Delete</a></td>');
                    ?>
                </tr>

            <?php
            $i=$i+1;
       }
           ?>
		</tr>
		<tr><td><a href="wiform.php"  class="button">Add Employee</a></td></tr>
	</table>

</div>
</body>
</html>
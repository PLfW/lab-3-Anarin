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
<div>
	
</div>
<div id="main">
		<table method="post">
		<tr>
			<th>Identifier </th>
			<th>Name of Organization</th>
			<th>Position</th>
			<th>Experience</th>
			<th>Reason Of Quit</th>
			<th>Date Of Quit</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
 <?php
         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM lastworkplace");
            $n = mysql_num_rows($results);
            $i=1;
           while($row = mysql_fetch_assoc($results)) {
           	$id=$row['l_id'];
            ?>
                <tr>
                    <td><?php echo $row['l_id']?></td>
                    <td><?php echo $row['l_name']?></td>
                    <td><?php echo $row['l_position']?></td>
                    <td><?php echo $row['l_experience']?></td>
                    <td><?php echo $row['l_reason']?></td>
                    <td><?php echo $row['l_date']?></td>
                    <?php
                    echo('<td><a href="lpowedit.php?id='.$id.'">Edit</a></td>');
                    print('<td><a href="lpowdel.php?id='.$id.'">Delete</a></td>');
                    ?>
                </tr>

            <?php
            $i=$i+1;
           }
           ?>
           </tr>
		<tr><td><a href="liform.php"  class="button">Add Last Place Of Work</a></td></tr>
		</tr>
	</table>
</div>
</body>
</html>
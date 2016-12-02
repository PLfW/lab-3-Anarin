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
<div>
	
</div>
<div id="main">
	<table method="post">
		<tr>
			<th>Identifier </th>
			<th>University Name</th>
			<th>Diploma Identifier</th>
			<th>Graaduation Date</th>
			<th>Speciality</th>
			<th>Qualification</th>
			<th>Educalional Form</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
 <?php
         mysql_connect("localhost","root","5246849were");     
         mysql_select_db("company") or die;
            $results = mysql_query("SELECT * FROM education");
            $n = mysql_num_rows($results);
            $i=1;
           while($row = mysql_fetch_assoc($results)) {
           	$id=$row['e_id'];
            ?>
                <tr>
                    <td><?php echo $row['e_id']?></td>
                    <td><?php echo $row['e_name']?></td>
                    <td><?php echo $row['e_duploma']?></td>
                    <td><?php echo $row['e_enddate']?></td>
                    <td><?php echo $row['e_specialty']?></td>
                    <td><?php echo $row['e_qualification']?></td>
                    <td><?php echo $row['e_form']?></td>
                    <?php
                    echo('<td><a href="educationedit.php?id='.$id.'">Edit</a></td>');
                    print('<td><a href="educationdel.php?id='.$id.'">Delete</a></td>');
                    ?>
                </tr>

            <?php
            $i=$i+1;
           }
           ?>
           </tr>
		<tr><td><a href="eiform.php"  class="button">Add Education</a></td></tr>
		</tr>
	</table>
</div>
</body>
</html>
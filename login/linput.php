  <?php
$con = mysql_connect("localhost","root","5246849were");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("company", $con); 

$sql="INSERT INTO lastworkplace (l_name, l_position, l_experience, l_reason, l_date)
      VALUES
      ('$_POST[l_name]','$_POST[l_position]','$_POST[l_experience]','$_POST[l_reason]','$_POST[l_date]');";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added"; 

mysql_close($con)
           ?>
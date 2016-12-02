  <?php
$con = mysql_connect("localhost","root","5246849were");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("company", $con); 

$sql="INSERT INTO worker (w_sex, w_position, w_photo, w_firstname, w_name, w_lastname)
      VALUES
      ('$_POST[w_sex]','$_POST[w_position]','$_POST[w_photo]','$_POST[w_firstname]','$_POST[w_name]','$_POST[w_lastname]');";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added"; 

mysql_close($con)
           ?>
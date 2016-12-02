  <?php
$con = mysql_connect("localhost","root","5246849were");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("company", $con); 

$sql="INSERT INTO education (e_name, e_duploma, e_enddate, e_specialty, e_qualification, e_form)
      VALUES
      ('$_POST[e_name]','$_POST[e_duploma]','$_POST[e_enddate]','$_POST[e_specialty]','$_POST[e_qualification]', '$_POST[e_form]');";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added"; 

mysql_close($con)
           ?>
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo 'Connected successfully';

$db_selected = mysql_select_db('carrera', $con);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}


// database connection

$result = mysql_query('SELECT * FROM colors LIMIT 50');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}


mysql_close($con);
?>

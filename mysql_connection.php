<?php

var_dump($_POST);

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

$result = mysql_query('SELECT * FROM look_orders where Date between');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

select Date, TotalAllowance from Calculation where EmployeeId = 1
             and Date between '2011/02/25' and '2011/02/27'


mysql_close($con);
?>

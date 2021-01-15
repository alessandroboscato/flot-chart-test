<?php

$startdate = $_GET["startdate"];
$enddate = $_GET["enddate"];
echo $startdate;
echo $enddate;

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

// // database connection

$query = 'select * from look_orders
 where substring(order_date, 1, 7) between "'.$startdate.'" and "'.$enddate.'";';
$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}


while($row = mysql_fetch_array($result)){
  echo $row['order_id'];
	echo "<br />";
}



mysql_close($con);
?>

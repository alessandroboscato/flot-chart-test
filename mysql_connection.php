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
// $query ='select * from look_orders where order_date like "'.$key.'%"';
//  $query = "SELECT * FROM justshawarma_nexo_commandes where REF_CLIENT = '$uuc' and DATE_CREATION BETWEEN '".$between['date_from']."' AND '".$between['date_to']."';

$result = mysql_query('SELECT * FROM look_orders');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

// while($row = mysql_fetch_array($result)){
// 	echo $row['order_date'];
// 	echo "<br />";
// }




mysql_close($con);
?>

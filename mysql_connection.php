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
$query ='select * from look_orders where order_date like "'.$key.'%"';
 $query = "SELECT * FROM justshawarma_nexo_commandes where REF_CLIENT = '$uuc' and DATE_CREATION BETWEEN '".$between['date_from']."' AND '".$between['date_to']."';

$result = mysql_query('SELECT * FROM look_orders where order_date between '2019-01-01' and '2019-01-30'');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

select Date, TotalAllowance from Calculation where EmployeeId = 1
             and Date between '2011/02/25' and '2011/02/27'


mysql_close($con);
?>
